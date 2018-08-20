@extends('fracments.main')

@section('contenido')

{!! Form::open(["route"=>"ram.store"] ) !!}
<div class="form-row">
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<label  for="nombreRam">Nombre del procesador</label>
		<input type="text" class="form-control" id="nombreRam" name="nombreRam" placeholder="Escribe el nombre del procesador .." required="true">
	</div>
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<label  for="valor">Valor agregado</label>
		<input type="text" name="valor" class="form-control" id="valor" placeholder="Escribe el valor agregado .." required="true">
	</div>
	


</div>

	<div class=" d-flex ">
		<button type="submit" class="btn btn-primary ml-auto " >Guardar</button>
	</div>

{!! Form::close() !!}



@endsection