<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){
        
            return view('templates.index');
      
    }
    // public function doLogin(){
    //     $input=[
    //         'email'=>request('email'),
    //         'password'=>request('password')
    //     ];
    //     if(auth()->guard('admin')->attempt($input,true)){
    //         return redirect()->route('dashboards');
    //     }
    //     else{
    //         return redirect()->route('login')->with('error', 'Invalid credentials');
    //     }
    // }
    public function doLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboards'); // Redirect to the admin dashboard route
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    // public function doLogin(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         return redirect()->route('dashboards');
    //     }

    //     return redirect()->route('login')->with('error', 'Invalid credentials');
    // }
    // }

    // public function doLogin(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    
    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         // Authentication successful, check if you reach this point
    //         dd('Successfully authenticated.');
    //         return redirect()->route('dashboards');
    //     }
    
    //     // Authentication failed, check if you reach this point
    //     dd('Authentication failed.');
    
    //     return redirect()->route('login')->with('error', 'Invalid credentials');
    // }

    // public function doLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
 
    //     if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
    //         $user = auth()->guard('admin')->user();
    //         if($user->is_admin == 1){
    //             return redirect()->route('dashboards')->with('success','You are Logged in sucessfully.');
    //         }
    //     }else {
    //         return redirect()->route('login')->with('error','Whoops! invalid email and password.');
    //     }

    // public function doLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
   
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('dashboards');
                       
    //     }
  
    //     return redirect("login")->withSuccess('Login details are not valid');
    // }
    }
 
   
