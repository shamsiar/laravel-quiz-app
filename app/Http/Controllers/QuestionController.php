<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Test;
use Image;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('test')->latest()->get();

        return view('backend.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tests = Test::all();
        return view('backend.questions.create', compact('tests'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'test_id'  => 'required',
            'question'  => 'required',
            'option_1'  => 'required',
            'option_2'  => 'required',
            'option_3'  => 'required',
            'option_4'  => 'required',
            'answer'    => 'required',
        ]);

        $is_image = false;

        if ($request->file()) {
            $imgs = [];
            $is_image = true;

            foreach ($request->file() as $filename => $image) {
                // $image = $request->file('image');
                $imagename = time() . '-' . $filename . '.' . $image->extension();

                $destinationPath = public_path('/question_images');
                $img = Image::make($image->path());
                $img->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $imagename);

                $imgs[$filename] = $imagename;
                // $destinationPath = public_path('/question_images');
                // $image->move($destinationPath, $input['imagename']);
            }
        }

        Question::create([
            'test_id'  => $request->test_id,
            'question'  => $request->question,
            'option_1'  => $is_image ? $imgs['option_1'] : $request->option_1,
            'option_2'  => $is_image ? $imgs['option_2'] : $request->option_2,
            'option_3'  => $is_image ? $imgs['option_3'] : $request->option_3,
            'option_4'  => $is_image ? $imgs['option_4'] : $request->option_4,
            'answer'    => $request->answer,
            'is_image'    => $is_image,
        ]);

        return redirect()->route('questions.index')->with('success', 'Question created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $tests = Test::all();

        return view('backend.questions.edit', compact('question', 'tests'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {

        $request->validate([
            'test_id'  => 'required',
            'question'  => 'required',
            'option_1'  => 'required',
            'option_2'  => 'required',
            'option_3'  => 'required',
            'option_4'  => 'required',
            'answer'    => 'required',
        ]);

        $is_image = $request->is_image;

        if ($request->file()) {
            $imgs = [];
            $is_image = true;

            foreach ($request->file() as $filename => $image) {
                // $image = $request->file('image');
                $imagename = time() . '-' . $filename . '.' . $image->extension();

                $destinationPath = public_path('/question_images');
                $img = Image::make($image->path());
                $img->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $imagename);

                $imgs[$filename] = $imagename;
                // $destinationPath = public_path('/question_images');
                // $image->move($destinationPath, $input['imagename']);
            }
        }
        // dd($request);
        $question->update([
            'test_id'  => $request->test_id,
            'question'  => $request->question,
            'option_1'  => isset($imgs['option_1']) ? $imgs['option_1'] : $request->option_1,
            'option_2'  => isset($imgs['option_2']) ? $imgs['option_2'] : $request->option_2,
            'option_3'  => isset($imgs['option_3']) ? $imgs['option_3'] : $request->option_3,
            'option_4'  => isset($imgs['option_4']) ? $imgs['option_4'] : $request->option_4,
            'answer'    => $request->answer,
            'is_image'    => $is_image,
        ]);

        return redirect()->route('questions.index')->with('success', 'Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully');
    }
}
