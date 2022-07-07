@extends('_sidebar')

@section('title', 'Dashboard')

@section('konten')
	@if(auth()->user()->email == 'admin@gmail.com')
		  	<h1>Halo Welcome back ADMIN</h1>
	@else
		<div class="row g-3 mt-5 ml-5">
  		<div class="col-md-5">
  			<div class="card shadow p-3 mb-4 bg-body rounded">
			  <div class="card-header">
			    <h5 class="card-title">Profile</h5>
			  </div>
			  <div class="card-body">
			    <p class="card-text">Kamu bisa melengkapi data kamu yang belum lengkap</p>
			    <a href="/dashboard/profile/" class="btn btn-primary">Profile</a>
			  </div>
			</div>
  		</div>
  		<div class="col-md-7 ">
  			<div class="card shadow p-3 mb-4 bg-body rounded">
			  <div class="card-header">
			  	 <h5 class="card-title">Voucher</h5>
			  </div>
			  <div class="card-body">
			    <p class="card-text">Kamu belum mendapatkan voucher, silahkan order terlebih dahulu</p>
			    <a href="#" class="btn btn-primary">Voucher</a>
			  </div>
			</div>
  		</div>
  		<div class="col-12">
		    <div class="card shadow p-3 mb-4 bg-body rounded">
			  <div class="card-header">
			    <h5 class="card-title">History</h5>
			  </div>
			  <div class="card-body">
			    <p class="card-text">Kamu belum order apapun, silahkan order terlebih dahulu</p>
			    <a href="#" class="btn btn-primary">History</a>
			  </div>
			</div>
		</div>
	</div>
	@endif
	
	

@endsection