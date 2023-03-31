<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Test;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
