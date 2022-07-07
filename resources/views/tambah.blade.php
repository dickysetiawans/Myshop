@extends('_layout')

@section('title', 'Tambah')

@section('konten')
	<form action="/tambah/store" method="post" class="mt-5">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		harga <input type="text" name="harga" required="required"> <br/>
		deskripsi <input type="text" name="deskripsi" required="required"> <br/>
		
		<input type="submit" value="submit">
	</form>
	
@endsection