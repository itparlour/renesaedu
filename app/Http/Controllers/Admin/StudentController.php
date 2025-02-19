<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->same();

        return redirect()->route('admin.student.index')->with([
            'status' => 'success',
            'message' => 'Student created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        view()->share(['student' => $student]);
        return view('admin.student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        view()->share(['student' => $student]);
        return view('admin.student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->save();

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Student updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.course.index')->with([
            'status' => 'success',
            'message' => 'Student deleted successfully'
        ]);
    }
}
