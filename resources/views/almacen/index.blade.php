@extends('fracments.main')

@section('contenido')

<h3>Catalogo de almacenamientos</h3>
<div class="text-right" style="margin: 2%">
	<a href="{{ route('almacen.create') }}" class="btn btn-primary">Agregar</a>
</div>

<div>
	<table class="table table-inverse text-center" >
			<thead class="thead-dark ">
				<tr>
					<th style="width: 20%">Id</th>
					<th style="width: 20%">Almacenamiento</th>
					<th style="width: 20%">Valor agregado</th>
					<th style="width: 20%"></th>

				</tr>
			</thead>
			<tbody>
				@foreach($marcas as $marca)
				<tr>
					<td>{{ $marca->id }}</td>
					<td>{{ $marca->nombreAlmacenaje }}</td>
					<td>{{ $marca->valor }}</td>

					<td>

						<div class="d-flex bd-highlight mb-3">
						  <div class="p-2 bd-highlight">
						  	<a href="{{ route('almacen.edit',$marca->id) }}" >
						  		 <span class="badge badge-info">Editar</span>
						  	</a>
						  </div>
						  <div class="p-2 bd-highlight">
						  	{!! Form::open(['route'=>['almacen.destroy', $marca->id],'method'=>'DELETE','id'=>'destroy' .$marca->id ]) !!}
						
							<a href="#"   data-toggle="modal" data-target="#elim{!! $marca->id !!}"><span class="badge badge-danger">Eliminar</span>
							</a>



							<div class="modal fade" id="elim{!! $marca->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h2>Eliminacion de registro</h2>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <h5 class="modal-title" id="exampleModalLabel">¿Deseas eliminar {{ $marca->nombreAlmacenaje }} permanentemente?</h5>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							        <button type="button" onclick="$('#destroy'+ {!! $marca->id !!} ).submit()" class="btn btn-primary">Si, eliminar</button>
							      </div>
							    </div>
							  </div>
							</div>


							{!! Form::close() !!}
						  </div>
				
					</td>
						
				</tr>


				@endforeach
			</tbody>
			
		</table>
</div>
<div class="w-100"></div>
			<div style="margin-bottom: 12%">
					{!!$marcas->render()!!}
			</div>






@endsection