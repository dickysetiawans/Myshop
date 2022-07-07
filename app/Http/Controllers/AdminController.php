<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin(){
    	$product = DB::table('name_product')->get();
		return view('Admin/index',['product' => $product]);
	}
	public function edit($id)
	{
		$product = DB::table('name_product')->where('id',$id)->get();
		return view('Admin/edit',['product' => $product]);
	 
	}
	public function update(Request $request)
	{
		DB::table('name_product')->where('id',$request->id)->update([
			'name' => $request->nama,
			'harga' => $request->harga,
			'deskripsi' => $request->deskripsi
		]);
		return redirect('/admin');
	}
	public function delete($id)
	{
		DB::table('name_product')->where('id',$id)->delete();
			
		return redirect('/admin');
	}
}
