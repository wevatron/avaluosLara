@extends('fracments.main')

@section('contenido')

{!! Form::open(["route"=>"marcas.store"] ) !!}
<h3>Agregar marca</h3>
<div class="form-row">
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<label  for="nombreMarca">Nombre de la marca</label>
		<input type="text" class="form-control" id="nombreMarca" name="nombreMarca" placeholder="Escribe el nombre del procesador .." required="true">
	</div>
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<label  for="valor">Valor agregado</label>
		<input type="text" name="valor" class="form-control" id="valor" placeholder="Escribe el valor agregado .." required="true">
	</div>
	<div class="form-group col-sm-12 col-md-6 col-lg-6">
		<select class="form-control">
			<option>ok</option>
		</select>
	</div>

</div>

	<div class=" d-flex ">
		<button type="submit" class="btn btn-primary ml-auto " >Guardar</button>
	</div>

{!! Form::close() !!}



@endsection


@section('code')
<script type="text/javascript">
	$.get('/marcasAjax', function(d) {
		// body...
		console.log(d);
	});
</script>
@endsection