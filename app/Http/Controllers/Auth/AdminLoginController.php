<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __constructor()
	{
		$this->middleware('guest:admin');
	}
    public function showLoginForm()
    {
    	return view('\auth\admin-login');

    }
    public function login(Request $request)
    {           

       //validate the form data
    	$this->validate($request,[
    		    'username' => 'required|email',
                'password' => 'required',
    	]);
    	//attempt to user login in
    	if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password],
    		$request->has('remember')))
        {   
    		return redirect::to('admin.dashboard');
    	}
    	return redirect()->back()->withInput($request->only('email','remember'));



    }
}
