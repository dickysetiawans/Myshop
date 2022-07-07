	
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
  			<form class="row" action="/register" method="post" style="padding: 30px; padding-left: 50px;"> 
				@csrf
				<h1 style="color: white; font-weight: bold;">Sign Up</h1>
			  <div class="col-11 mt-3">
			    <input type="text"id="name" name="name"  class="form-control @error('name') is-invalid @enderror " required="" value="{{ old('name')}}" placeholder="Name">
			     @error('name')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror
			  </div>
			  <div class="col-11 mt-3" >
			    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"  required="" value="{{ old('username')}}" placeholder="Username">
			    @error('username')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror
			  </div>
			  <div class="col-11 mt-3">
			    <input type="password"name="password" class="form-control @error('password') is-invalid @enderror" id="password"   required="" placeholder="Password">
			    @error('password')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror
			  </div>
			  <div class="col-11 mt-3">
			    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required="" value="{{ old('email')}}" placeholder="Email">
			     @error('email')
			    	<div class="invalid-feedback">
			    		{{ $message }}
			    	</div>
			    @enderror
			  </div>
			  <div class="col-12 mt-3" style="margin-left: 70px;" >
			    <button type="submit" class="btn btn-dark" style="width: 45%; text-align: center; font-weight: bold;">Sign Up</button>
			  </div>
			  <div class="col-sm-8 mt-3" style="margin-left: 50px; color: white;">
			    You have account? <a href="/login">Login</a>
			  </div>
			</form>
  		</div>
  	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>