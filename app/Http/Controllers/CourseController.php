<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(4); // Retrieve all courses from the database
        // dd($coursess);
      
        return view('users.courses', compact('courses'));

        // return view('users.courses');
    }

    public function store(Request $request){
    $course = new Course();
    $course->coursename = $request->coursename;
    $course->code = $request->code;
    $course->module = $request->module;
    $course->department = $request->department;
    $course->fee = $request->fee;
    $course->description = $request->description;

    // Set the username to the name of the currently authenticated user
    $course->user_name = auth()->user()->name;

    // Save the course to the database
    $course->save();

    $modules = $request->input('module');

    // Check if $modules is not null and is an array before iterating over it
    if (!is_null($modules) && is_array($modules)) {
        foreach ($modules as $module) {
            // Save each module to the database
            $course->modules()->create(['name' => $module]);
        }
    }

        return redirect()->back()->with('success', 'Course created successfully!');
    }
    
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        
    if(!$course){
        return redirect('/course')->with(['message' => 'Course not found']);
    }

    $course->coursename = $request->input('coursename') ?? $course->coursename;
    $course->code = $request->input('code') ?? $course->code;
    $course->module = $request->input('module') ?? $course->module;
    $course->department = $request->input('department') ?? $course->department;
    $course->fee = $request->input('fee') ?? $course->fee;
    $course->description = $request->input('description') ?? $course->description;
    $course->save();

    return redirect('/course')->with(['message' => 'Course updated successfully']);
    }

    public function destroy($id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return redirect('/course')->with(['message'   => 'Courses deleted successfully']);
    }

    public function studentcourse(){
        $courses = Course::paginate(4);
        $images = ['cousrse1.png', 'course2.png', 'course3.png', '1.jpg'];
        return view('users.studentcourses', ['images' => $images, 'courses' => $courses]);
    }
}