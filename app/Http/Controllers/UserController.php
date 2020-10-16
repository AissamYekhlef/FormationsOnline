<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // return view('admin.tableUsers', compact('users') );
        return view('admin.tables')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Here you can create a new User";
        // return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    //    $user = User::find(1);  
       return view('user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //return the form that used for edit a user
        // $user = auth()->user();
         return view('user.edit')->with('user', $user);

        // return $user;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // the rest of updating code
        // $u = User::get($user);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->password == password_hash($request->old_password, PASSWORD_DEFAULT)) {
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        }
        $user->avatar = $user->uploadAvatarUser($request);
        $user->save();

        return view('user.show')->with('user',$user);
        // return redirect('admin/users')->with('users', User::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/users')->with('users', User::all());
    }

    public function uploadAvatar(Request $request){
        if($request->hasFile('image')) {
            // $filename = $request->image->getClientOriginalName();
            $filename = auth()->user()->id . '_' . time() . '.jpg';
            if(auth()->user()->avatar) {
                Storage::delete('/public/images/' . auth()->user()->avatar);
            }
            $request->image->storeAs('images',  $filename, 'public');
            auth()->user()->update(['avatar'=> $filename]);
        }
        return redirect()->back();
        // return User::find(1)->avatar;
    }
}
