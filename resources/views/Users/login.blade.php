<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
    	body{
    		background-image: url('{{ URL('images/bg.png')}}');
    		background-size: cover;
    		height: 507px; 
    	}
    </style>
  </head>
  <body>
  	<div class="container-lg">
  		<div class="" style="width: 400px; background-color: black; border-radius: 10px; margin-top: 150px; margin-left: 700px;"> 	
  			@if(session()->has('succes'))
				<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
				  <strong>{{session('succes')}}</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			@if(session()->has('ErorLogin'))
				<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
				  <strong>{{session('ErorLogin')}}</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
  			<form class="row" action="/login" method="post" style="padding: 30px; padding-left: 50px;"> 
				@csrf
				<h1 class="mb-3" style="color: white; font-weight: bold;">Login</h1>
				<div class="input-group mb-3 mt-3"style="width: 92%;">
				  <span class="input-group-text" id="basic-addon1" >
				  	<i class='bx bxs-user'></i>
				  </span>
				  <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" name="email">
				</div>

			  	<div class="input-group mb-3 mt-3" style="width: 92%;">
				  <span class="input-group-text" id="basic-addon1">
				  	<i class='bx bxs-lock-alt'></i>
				  </span>
				  <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1" name="password">
				</div>
				<div class="col-12 mt-3" style="margin-left: 70px;" >
					<button type="submit" class="btn btn-dark" style="width: 45%; text-align: center; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
				</div>
	  			
	  			<div class="col-sm-8 mt-3" style="margin-left: 50px; color: white;">
			   	 	Not a member? <a href="/register">Sign up</a>
			  	</div>
			</form>
  		</div>
  	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
	