<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
    	//return $request->all();
    	$credentials = ['email' => $request->email, 'password' => $request->password];
    	if(Auth::guard('user')->attempt($credentials)){
    		Session::put('user',Auth::guard('user')->user());
    		return redirect()->intended('dashboard');
    	}else {
    		return redirect('login');
    	}

    }

    public function dashboard()
    {
    	return view('index');
    }

}
 