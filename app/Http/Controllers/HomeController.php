<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => 'required',
                'password' => 'required|min:5',
                'email' => 'required|email|unique:users',
                'fname'=>'required',
                'mname'=>'required'
            ], [
                'name.required' => 'Name is required',
                'fname.required' => 'Father name is required',
                'mname.required' => 'Mother name is required',
                'password.required' => 'Password is required'
            ]);
  
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
      
        return back()->with('success', 'User created successfully.');
    }
}
