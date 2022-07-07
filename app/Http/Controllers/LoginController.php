<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
		return view('Users/login');
	}
	public function login(Request $request)
	{
		$login = $request -> validate([
			'email' => 'required|email:dns',
			'password' => 'required'	
		]);

		if(Auth::attempt($login)){
			$request->session()->regenerate();
			if (auth()->user()->email == 'admin@gmail.com') 
			{
				return redirect()->intended('/');
				$request->session()->flash('AdminLogin','Welcome back admin');
				
			}else{
				return redirect()->intended('/');
				$request->session()->flash('LoginSucces','Login berhasil');
			}	
		}

		return back()->with('ErorLogin','Login failed!');
	}
	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect('/');
	}
}
