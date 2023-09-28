<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = "Subject Menu";
        $subjects = Subject::all();
        return view('subject.index', ['title' => $title, 'subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Subject Menu";

        return view('subject.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'subject' => 'required',
            'credit' => 'required',
        ]);

        Subject::create($request->all());

        return redirect()->route('subject.index')->with('success', 'subject added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        $title = "Subject Menu";

        return view('subject.show', ['title' => $title, 'subject' => $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        $title = "Subject Menu";

        return view('subject.edit', ['title' => $title, 'subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index')->with('success', 'subject deleted successfully');
    }
}
