<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
    	return view('Users/dashboard');
    }
    public function profile(){
    	return view('Users/profile');
    }
    public function update(Request $request){
    	$id = Auth::user()->id;

    	$validateData = $request->validate([
            'name'=>'min:3|max:255',
            'username'=>'min:3|max:255',
            'email'=>'min:3|max:255',
            'telpon'=>'min:3|max:255',
            'gender'=>'min:3|max:255',
            'bio'=>'min:3|max:300',
            'alamat'=>'min:8|max:255',
    	]);
    	DB::table('users')->where('id',$id)->update([
            'name' => $validateData['name'],
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'gender' => $validateData['gender'],
            'alamat' => $validateData['alamat'],
            'bio' => $validateData['bio'],
            'telpon' => $validateData['telpon'],           
    	]);
    	return redirect('/');
    }
    public function keranjang(){
        return view('Users/keranjang');
    }
    public function voucher(){
        return view('Users/voucher');
    }
}
