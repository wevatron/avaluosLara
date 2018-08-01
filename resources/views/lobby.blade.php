@extends('fracments.main')

@section('contenido')


<h1 style="margin:5%">Sistema de avalúos de equipo de computo.</h1>
<div class="row">
	<div class="col-sm-12 col-md-4 col-lg-4" >
		<div class="card" style="width: 100%;">
		  <img class="card-img-top" src=" {{ asset('img/lap.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Laptops</h5>
		    <p class="card-text">Valuación de equipos de computo portátiles que no sean minilaptops.</p>
		    <a href="#" class="btn btn-primary">Valuar</a>
		  </div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 col-lg-4" >
		<div class="card" style="width: 100%;">
		  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 col-lg-4" >
		<div class="card" style="width: 100%;">
		  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>



@endsection