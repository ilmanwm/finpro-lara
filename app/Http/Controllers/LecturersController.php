<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Lecture Menu";
        $lecturers = Lecturer::all();
        return view('lecturer.index', ['title' => $title, 'lecturers' => $lecturers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $title = "Lecture Menu";

        return view('lecturer.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'creditMax' => 'required',
            'creditExtra' => 'required',
        ]);

        Lecturer::create($request->all());

        return redirect()->route('lecturers.index')->with('success', 'Lecturer added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        $title = "Lecture Menu";

        return view('lecturer.show', ['title' => $title, 'lecture' => $lecturer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        $title = "Lecture Menu";

        return view('lecturer.edit', ['title' => $title, 'Lecture' => $lecturer]);
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
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();

        return redirect()->route('lecturers.index')->with('success', 'lecturer deleted successfully');
    }
}
