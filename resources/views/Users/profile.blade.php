@extends('_sidebar')

<title>Profile | {{ auth()->user()->name }}</title>
@section('konten')
	<div class="row g-3 mt-3">
		<div class="col-md-2">
			<img src="{{ URL('images/user.png')}}" alt="" width="100" height="100" class="rounded-circle me-2">
		</div>
		<div class="col-md-6">
			<h1>{{ auth()->user()->name }}</h1>
			<p class="lead">{{ auth()->user()->email }}</p>

		</div>
		<b class="d-print-none">{{ auth()->user()->bio }}</b>
		<div class="col-md-1">{{ auth()->user()->gender }}</div>
		<div class="col-md-2">{{ auth()->user()->telpon }}</div>
		<p class="lead">{{ auth()->user()->alamat }}</p>
	</div>
	<hr>
	<h3>Ubah Profile</h3>
	<hr>
	<form class="row g-3 mt-3" action="/dashboard/profile" method="post">
		@csrf
		<div class="col-md-6">
		    <label for="inputEmail4" class="form-label">Name</label>
		    <input type="text" name="name" class="form-control" id="inputname4" value="{{ auth()->user()->name }}">
		</div>
		<div class="col-md-6">
		    <label for="inputusername4" class="form-label">Username</label>
		    <input type="text" name="username" class="form-control" id="inputEmail4" value="{{ auth()->user()->username }}">
		</div>
		<div class="col-md-6">
		    <label for="inputEmail4" class="form-label">Email</label>
		    <input type="email" name="email" class="form-control" id="inputEmail4" value="{{ auth()->user()->email }}">
		</div>
		<div class="col-md-6">
		    <label for="inputtelpon4" class="form-label">Telpon</label>
		    <input type="text" name="telpon" class="form-control" id="inputEmail4" value="{{ auth()->user()->telpon }}">
		</div>
		<div class="col-md-4">
		    <label for="inputState" class="form-label">Jenis Kelamin</label>
		    <select id="inputState" class="form-select" name="gender">
		    	<option selected>.....</option>
			      <option>Pria</option>
			      <option>Wanita</option>
		    </select>
	  	</div>
	  	<div class="col-12">
		    <label for="inputbio4" class="form-label">Bio</label>
		    <input type="text" name="bio" class="form-control" id="inputEmail4" value="{{ auth()->user()->bio }}">
		</div>
		<div class="col-12">
		    <label for="inputalamat4" class="form-label">Alamat</label>
		    <input type="text" name="alamat" class="form-control" id="inputEmail4" value="{{ auth()->user()->alamat }}">
		</div>
		<div class="col-12">
		    <button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
@endsection