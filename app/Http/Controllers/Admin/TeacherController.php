<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->save();

        return redirect()->route('admin.teacher.index')->with([
            'status' => 'success',
            'messages' => 'Teacher created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        view()->share(['teacher' => $teacher]);
        return view('admin.teacher.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        view()->share(['teacher' => $teacher]);
        return view('admin.teacher.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->save();

        return redirect()->back()->with([
            'status' => 'success',
            'messages' => 'Teacher updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teacher.index')->with([
            'status' => 'success',
            'messages' => 'Teacher deleted successfully'
        ]);;
    }
}
