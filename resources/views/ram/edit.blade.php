@extends('fracments.main')

@section('contenido')


                     
{!! Form::model($marca,["route"=>["ram.update",$marca->id],"method" => "PUT"] ) !!}

<h3 style="margin-bottom:  2%">Editar la marca :  {{ $marca->nombreRam }} </h3>
<div class="form-row">
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<label  for="nombreRam">Nombre de la marca</label>
		{!! Form::text('nombreRam', null, ['class'=>'form-control', 'id' => 'nombreRam', 'placeholder'=>'Escribe la marca ..']) !!}
	</div>
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<label  for="valor">Valor agregado</label>
		{!! Form::text('valor', null, ['class'=>'form-control', 'id' => 'valor', 'placeholder'=>'Escribe el valor agregado ..']) !!}

	</div>
	


</div>

	<div class=" d-flex ">
		<button type="submit" class="btn btn-primary ml-auto " >Actualizar</button>
	</div>

{!! Form::close() !!}


@endsection