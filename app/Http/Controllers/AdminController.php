<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }
    
    public function getUsers()
    {
        $users = User::all();
        // return view('admin.tableUsers', compact('users') );
        return view('admin.tables')->with('users',$users);
    }
    public function getStudents()
    {
        $students = User::all();  
        //$students = User::where('role','student');  
        // return view('admin.tableUsers', compact('users') );
        return view('admin.tableUsers')->with('users',$students);
    }

    
}
