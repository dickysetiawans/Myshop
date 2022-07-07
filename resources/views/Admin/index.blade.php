@extends('_layout')

@section('title', 'Admin')

@section('konten')
	<a href="/tambah" class="btn btn-primary position-relative mt-5">
		Tambah
		 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    		+
  		</span>
	</a>
	<table class="table mt-3">
	  <thead class="table-dark">
	    <tr>
	      <th scope="col">no</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Harga</th>
	      <th scope="col">Deskripsi</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($product as $key => $data)
		    <tr>
		      <th scope="row">{{$data->id}}</th>
		      <td>{{$data->name}}</td>
		      <td>{{$data->harga}}</td>
		      <td>{{$data->deskripsi}}</td>
		      <td>
		      	<a href="/admin/edit/{{ $data->id }}" class="badge text-bg-success" style="text-decoration: none;">Edit</a> | 
		      	<a href="/admin/delete/{{ $data->id }}" class="badge text-bg-danger" style="text-decoration: none;">Delete</a>
		      </td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>
	
@endsection