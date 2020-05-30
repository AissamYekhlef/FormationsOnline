<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::all();

        return view('course.index', compact('courses'));
    }
    public function show($courseId)
    {
        $course = Course::findOrFail($courseId);
        return view('course.show',compact('course'));
    }


}
