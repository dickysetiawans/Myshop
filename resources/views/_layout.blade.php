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
	    <nav class="navbar navbar-expand-lg fixed-top blue" id="Nav">
		  <div class="container">
		    <a class="navbar-brand ml-4 h1" href="/"style="color: white;">Coffee Matter</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="color: white; border: none;">
		      <i class='bx bx-menu'></i>
		    </button>
		    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavAltMarkup">
		      <div class="navbar-nav ">
		        <a class="nav-link active mr-5" aria-current="page" href="/" style="color: white;margin-right: 30px;">Home</a>
		        <a class="nav-link mr-5 " href="/product" style="color: white; margin-right: 30px;">Product</a>
		        <a class="nav-link mr-5" href="/about" style="color: white; margin-right: 30px;">About</a>
		        <a class="nav-link mr-5" href="/contact" style="color: white; margin-right: 30px;">Contact</a>
		        <a class="nav-link mr-4 mt-1" href="#" style="color: white;margin-left: 10px;">
		        	<i class='bx bxl-instagram'></i>
		        </a>
		        <a class="nav-link mr-4 mt-1" href="#" style="color: white;">
		        	<i class='bx bxl-telegram' ></i>
		        </a>
		        
		        <a class="nav-link mr-4 mt-1" href="#" style="color: white;">
		        	<i class='bx bxl-whatsapp' ></i>
		        </a>
		        @auth
		        	<li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
			          		<i class="bx bxs-user bx-tada"></i>

			          </a>
			          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <li><a class="dropdown-item" href="/dashboard"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
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
			        </li>
		        @else
					<a class="nav-link mr-5 mt-1" href="/login" style="color: white; font-size: 1.3rem;"><i class='bx bx-log-in' ></i></a>
		        @endauth
		        
		      </div>
		    </div>
		  </div>
		</nav>
	<div>
		@yield('header')
	</div>
	<div class="container">
		@yield('konten')
	</div>
	<div>
		@yield('mykonten')
	</div>
	
		
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
  </body>
</html>