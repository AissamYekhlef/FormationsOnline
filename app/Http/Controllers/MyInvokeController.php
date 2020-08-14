<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInvokeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // echo "Hello from the invoke method in the Controller";
        
        // if ($request->coupon = 20) {
        //     abort(403, "Your age must be greater than 20 .!!");
        // }else{  }
            return view('layouts.template');
      
       
    }
}
