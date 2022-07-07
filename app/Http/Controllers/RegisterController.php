<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
		return view('Users/register');
	}
	public function store(Request $request)
	{
		$validateData = $request -> validate([
			'name'=>['required','min:8', 'max:300'],
			'username'=> ['required','min:8','max:300','unique:users'],
			'password'=>'required|min:8|max:300',
			'email' =>['required', 'email:dns', 'unique:users']
			
		]);
		$validateData['password'] = Hash::make($validateData['password']);

		User::create($validateData);

		$request->session()->flash('succes','Registration berhasi!!! Please Login');

		return redirect('/login');
	}
	

}
