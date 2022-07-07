@extends('_layout')

@section('title', 'Welcome to | Myshop')
<style type="text/css">

      .blue{
        background:transparent;
        color: white;
        transition: .5s;
        margin-top: 30px;

      }
      .top{
        margin-top: 0;
        transition: .5s;
        position: fixed;
        background-color: black;
      }
      a{
        margin-right: 3px;

      }
</style>
@section('header')
	<div class="jumbotron jumbotron-fluid"style="height: 552px;  background-image: url('{{ URL('images/bg.png')}}'); background-size: cover;">
		<div class="container" style="color: white; left: 0; padding-left: 50%;">
	        <h1 class="display-4" style="padding-top: 170px; font-weight: bold; margin-bottom: 20px;">Coffee Matter</h1>
	        <p class="lead">Gagal fokus itu akibat saraf <br>tegangmu kekurangan kafien</p>
	        
	        <p class="lead">
			    <a class="btn btn-dark btn-lg" style="text-align: center; font-weight: bold;"href="#" role="button">Orders</a>
			</p>
      </div>
	</div>
	
@endsection

@section('konten')
	<div class="row g-3">	
		@foreach($product as $key => $data)
		<div class="col-md-4 mb-5 mt-5">
			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row g-0">
			    <div class="col-md-4">
			      <img src="..." class="img-fluid rounded-start" alt="...">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">{{$data->name}}</h5>
			        <p class="card-text">{{$data->name}}</p>
			        <p class="card-text">{{$data->deskripsi}}<small class="text-muted">Last updated 3 mins ago</small></p>
			      </div>
			    </div>
			  </div>
			</div>
			</div>
			
		@endforeach
		
	</div>
	
@endsection
@section('mykonten')

	<div class="jumbotron jumbotron-fluid align-self-end"style="height: 1007px;  background-image: url('{{ URL('images/coffee-1.png')}}'); background-size: cover;">
		<div class="container" style="color: black; left: 0; padding-left: 50%;">
	        <h1 class="display-4" style="padding-top: 250px; font-weight: bold; margin-bottom: 20px;"> Chocolate Coffee</h1>
	        <p class="lead">Buruan Beli Chocolate Coffee<br>Dijamin nagih</p>
	        
	        <p class="lead">
			    <a class="btn btn-dark btn-lg" style="text-align: center; font-weight: bold;"href="#" role="button">Orders</a>
			</p>
      	</div>
	</div>
	<div class="jumbotron jumbotron-fluid align-self-end" style="height: 1007px;  background-image: url('{{ URL('images/coffee-2.png')}}'); background-size: cover;">
		<div class="container" style="color: black; left: 0; padding-left: 50%;">
	        <h1 class="display-4" style="padding-top:400px; font-weight: bold; margin-bottom: 20px;"> Red Valvet</h1>
	        <p class="lead">Buruan Beli Red valvet<br>Dijamin nagih</p>
	        
	        <p class="lead">
			    <a class="btn btn-dark btn-lg" style="text-align: center; font-weight: bold;"href="#" role="button">Orders</a>
			</p>
      	</div>
	</div>
	<div class="jumbotron jumbotron-fluid align-self-end" style="height: 1007px;  background-image: url('{{ URL('images/coffee-3.jpg')}}'); background-size: cover;">
		<div class="container" style="color: black; left: 0; padding-left: 58%;">
	        <h1 class="display-4" style="padding-top:400px; font-weight: bold; margin-bottom: 20px;"> Coffee beer</h1>
	        <p class="lead">Buruan Beli Coffee beer<br>Dijamin nagih</p>
	        
	        <p class="lead">
			    <a class="btn btn-dark btn-lg" style="text-align: center; font-weight: bold;"href="#" role="button">Orders</a>
			</p>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid align-self-end" align="center" style="height: 1007px;  background-image: url('{{ URL('images/coffee-4.jpg')}}'); background-size: cover;"></div>
	<div class="position-relative">
		<div class="position-absolute bottom-0 end-0">
				
		</div>
	</div>
	
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(window).scroll(function(){
			var scroll = $(window).scrollTop();
        	console.log(scroll)
        	if (scroll >= 20) {
	          $("#Nav").removeClass("blue");
	          $("#Nav").addClass("top");
	        }else{
	          $("#Nav").removeClass("top");
	          $("#Nav").addClass("blue");
	        }
		});
	</script>
