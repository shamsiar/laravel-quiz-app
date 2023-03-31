<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Result;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::latest()->get();

        return view('backend.tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'pass_mark' => 'required',
            'number_of_questions' => 'required',
        ]);


        Test::create($request->all());

        return redirect()->route('tests.index')->with('success', 'Test created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function testResults()
    {
        $results = Result::latest()->get();
        // dd($results);
        return view('backend.tests.results', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('backend.tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'pass_mark' => 'required',
            'number_of_questions' => 'required',
        ]);

        $test->update($request->all());

        return redirect()->route('tests.index')->with('success', 'Test updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete();

        return redirect()->route('tests.index')->with('success', 'Test deleted successfully');
    }
}
