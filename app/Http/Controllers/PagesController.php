<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Test;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $tests = Test::all();

        return view('frontend.home', compact('tests'));
    }


    public function aboutUs()
    {
        return view('frontend.about_us');
    }
    public function certificate()
    {
        $path = public_path('common/unicminds_certificate.jpg');

        $img = Image::make($path);

        $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->text('This is a example ', 16, 16);

        $img->text($img, 400, 100, function ($font) {
            $font->color('#000000');
            $font->align('center');
            // $font->angle(45);
        });
        //$img->blur(10);
        $img->save(public_path('common/certificate-1.jpg'), 20);
        // if (!File::exists($storageDir . '\'' . $request->image_file->getClientOriginalName())) {
        //     File::makeDirectory($storageDir, 0755, true, true);
        //     $img->save($storageDir . $request->text_to_add . '.png', 20);            /// Last param for image quality
        // }


        // $image = imagecreatefromjpeg($path);
        // // dd($image);
        // $color = imagecolorallocate($image, 255, 255, 255);
        // $string = 'The string you want to write horizontally on the image';
        // $fontSize = 3;
        // $x = 300;
        // $y = 400;

        // // write on the image
        // imagestring($image, $fontSize, $x, $y, $string, $color);

        // // save the image
        // imagejpeg($image,  $fileName = public_path('common/certificate-1.jpg'), $quality = 100);

        return view('frontend.certificate');
    }


    public function profile()
    {
        $user = Auth::user();
        $results = Result::where('user_id', $user->id)->latest()->get();
        return view('frontend.profile', compact('user', 'results'));
    }


    public function profileUpdate(Request $request, $id)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('home')->with('success', 'Profile updated successfully');
        // return view('frontend.profile', compact('user'));
    }

    public function tests()
    {
        $tests = Test::all();

        return view('frontend.tests', compact('tests'));
    }

    /**
     * Display the specified resource.
     */
    public function viewTest($id)
    {
        $test = Test::find($id);
        // dd($test);

        return view('frontend.view_test', compact('test'));
    }


    public function startTest($id)
    {
        if (Auth::check()) {

            $test = Test::find($id);

            $data = Result::where([['test_id', $id], ['user_id', Auth::user()->id]])
                ->whereMonth('created_at', date('m'))
                ->count();
            $counter = Result::where('user_id', Auth::user()->id)
                ->whereMonth('created_at', date('m'))
                ->count();

            if ($data) {
                return redirect()->back()->withSuccess('You already have given this test. Please try again next month.');
            }
            // dd($counter);
            if ($counter >= 3) {
                return redirect()->back()->withSuccess('You already have given 3 tests for this month. Please try again next month.');
            }

            $questions = Question::where('test_id', $id)
                ->inRandomOrder()
                ->limit($test->number_of_questions)
                ->get();

            return view('frontend.start_test', compact('test', 'questions'));
        } else {
            return redirect("login")->withSuccess('Please Login to Start Test');
        }
    }


    public function result(Request $request)
    {
        // dd($request);
        $test = Test::find($request->test_id);
        $user = Auth::user()->id;
        $score = 0;

        foreach ($request->answers as $q => $answer) {

            $question = Question::find($q);

            if ($question->answer == $answer) {
                ++$score;
            }
        }
        // dd($score);
        $pass = $score >= $test->pass_mark ? true : false;

        Result::create([
            'user_id' => $user,
            'test_id' => $test->id,
            'score'   => $score,
            'is_pass' => $pass,
        ]);

        return view('frontend.test_result', compact('test', 'pass', 'score'));
    }
}
