<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function test(){
        return view('testhome');
    }
    public function testresource(){
        return redirect()->route('admin.users'); // use the route() helper
        // return redirect()->url('/admin/users'); // use the url() helper
        // return redirect()->route('course.index')->with('courses',Course::all());
        // return route('courses.show')->with('courseId', '2');
    }
    public function admin(){
        return view('admin.dashboard');
    }
}
