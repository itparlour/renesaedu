<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->save();

        return redirect()->route('admin.course.index')->with([
            'status' => 'success',
            'message' => 'Course created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        view()->share(['couse' => $course]);

        return view('admin.course.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        view()->share(['couse' => $course]);
        return view('admin.course.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->name = $request->name;
        $course->save();

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Course updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.course.index')->with([
            'status' => 'success',
            'message' => 'Course deleted successfully'
        ]);
    }
}
