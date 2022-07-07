@extends('_layout')

@section('title', 'Menu | Coffee matter')
<style type="text/css">
	.blue{
		background-color: #000;
	}
</style>
@section('header')
<div class="row g-3 mt-5" style="width: 90%;">
	<div id="list-example" class="list-group mt-4 col-md-2 h-auto">
	  <a class="list-group-item list-group-item-action bg-dark" href="#list-item-1" style="color: white;"><i class='bx bxs-coffee'></i> Coffee</a>
	  <a class="list-group-item list-group-item-action " href="#list-item-2"><i class='bx bxs-dish' ></i> Makanan</a>
	  
	</div>
	<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example col-md-4" tabindex="0" style="width: 800px;">
		<form class="d-flex input-group mt-2" role="search" action="/product" method="post">
			  <input type="text" class="form-control" placeholder="Cari menu" aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
			  <button class="btn btn-outline-dark" type="submit" id="button-addon2"><i class='bx bx-search-alt-2'></i></button>
      	</form>
      	<div class="row g-3 mb-4"id="list-item-1">
      		<h4><em>Coffee</em></h4>	  		
	      	@foreach($product as $key => $data)
				<div class="col-md-5">
				  	<div class="card" style="width: 18rem; margin-top: 5px;">
						<img src="..." class="card-img-top" alt="..." >
						<div class="card-body">
						    <h5 class="card-title">{{$data->name}}</h5>
						    <p class="card-text">{{$data->harga}}  <br> {{$data->deskripsi}}</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						 </div>
					</div>
				</div>
			@endforeach
		</div>
	  <div class="row g-3"id="list-item-2">
	  	<h4><em>Makanan</em></h4>
	  </div>
	</div>
</div>


@endsection
@section('konten')
	
		
@endsection