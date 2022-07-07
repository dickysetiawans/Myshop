<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function product(){
		$product = DB::table('name_product')->get();
		return view('product',['product' => $product]);
	}
 
	public function about(){
		return view('about');
	}
 
	public function contact(){
		return view('contact');
	}
	public function tambah(){
		return view('tambah');
	}
	public function store(Request $request)
	{
		
		DB::table('name_product')->insert([
		'name' => $request->nama,
		'harga' => $request->harga,
		'deskripsi' => $request->deskripsi
	]);
	return redirect('/');
	}

}
