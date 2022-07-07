@extends('_layout')

@section('title', 'Admin')

@section('konten')
	@foreach($product as $p)
		<form action="/admin/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
			Nama <input type="text" required="required" name="nama" value="{{ $p->name }}"> <br/>
			harga <input type="text" required="required" name="harga" value="{{ $p->harga }}"> <br/>
			deskripsi <input type="text" required="required" name="deskripsi" value="{{ $p->deskripsi }}"> <br/>
			<input type="submit" value="submit">
		</form>
	@endforeach
@endsection