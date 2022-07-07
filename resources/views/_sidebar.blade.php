<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
  	<div class="row g-0" style=" height: 657px;">
  		<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-6 " style="width: 250px;">
		    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
		      <span class="fs-3">Coffe Matter</span>
		    </a>
		    <hr>
		    <ul class="nav nav-pills flex-column mb-auto">
		      <li>
		        <a href="/dashboard/" class="nav-link text-white {{ Request::is('dashboard') ? 'active':'' }}">
		          <i class='bx bxs-dashboard'></i>
		          Dashboard
		        </a>
		      </li>
		      <li>
		        <a href="/product" class="nav-link text-white">
		          <i class='bx bx-cart'></i>
		          Orders
		        </a>
		      </li>
		      <li>
		        <a href="/dashboard/keranjang" class="nav-link text-white {{ Request::is('dashboard/keranjang') ? 'active':'' }}">
		          <i class='bx bxs-basket'></i>
		          Keranjang
		        </a>
		      </li>
		      <li>
		        <a href="/dashboard/voucher" class="nav-link text-white {{ Request::is('dashboard/voucher') ? 'active':'' }}">
		          <i class='bx bx-purchase-tag-alt' ></i>
		          voucher
		        </a>
		      </li>
		      <li>
		        <a href="/dashboard/profile/" class="nav-link text-white {{ Request::is('dashboard/profile') ? 'active':'' }}">
		          <i class='bx bxs-user'></i>
		          Profile
		        </a>
		      </li>
		    @if(auth()->user()->email == 'admin@gmail.com')
		  		<li>
		        	<a href="#" class="nav-link text-white">
		          	<i class='bx bxs-user'></i>
		          	Your Product
		        </a>
		      </li>
		  	@endif
		    </ul>
		    <hr>
		    <div class="dropdown">
		      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
		        <img src="{{ URL('images/user.png')}}" alt="" width="32" height="32" class="rounded-circle me-2">
		        <strong>{{ auth()->user()->name }}</strong>
		      </a>
		      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
		        <li><a class="dropdown-item" href="#"><i class='bx bx-cog'></i> Settings</a></li>
		        <li><a class="dropdown-item" href="/dashboard/profile/"><i class='bx bxs-user'></i> Profile</a></li>
		        <li><hr class="dropdown-divider"></li>
		        <li>
		        	<form action="/logout" method="post">
			            @csrf
			            <button class="dropdown-item">
			            	<i class='bx bx-log-out'></i>
			            Logout</button>
			        </form>
		        </li>
		      </ul>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-8">
		  	
		  	<div class="container">
		  		@yield('konten')
		  	</div>
		  	
		  </div>
  	</div>
  	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

