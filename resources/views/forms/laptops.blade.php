@extends('fracments.main')

@section('contenido')
	<h2>Captura de laptops</h2>


	{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="row">
    	<div class="form-group col">
    		{!! Form::label('procesador_id','Procesador', ['for'=>'procesador_id']) !!}
    		{!! Form::select('procesador_id', [
    			''=>'Ninguno elegido',
    			'170'=>'Intel Single Core',
    			'340'=>'Intel Dual Core ',
    			'340'=>'AMD Dual Core/Serie E',
    			'255'=>'Sempron',
    			'255'=>'Intel Celeron',
    			'255'=>'Intel Pentium',
    			'1190'=>'AMD A4',
    			'1615'=>'AMD A6 ',
    			'2210'=>'AMD A8',
    			'2600'=>'AMD A9',
    			'2810'=>'AMD A10',
    			'3000'=>'AMD A12',
    			'1190'=>'Intel Core i3',
    			'1615'=>'Intel Core i5',
    			'2910'=>'Intel Core i7',
    			'3500'=>'Intel Core i9',
    			],null,['class'=>'form-control ', 'id'=>'procesador_id']) !!}
    	</div>

    	<div class="form-group col">
    		{!! Form::label('ram_id','Ram', ['for'=>'ram_id']) !!}
    		{!! Form::select('ram_id', [
    			''=>'Ninguno elegido',
    			'170'=>'2 GB',
    			'212'=>'3 GB',
    			'255'=>'4 GB',
    			'340'=>'6 GB',
    			'425'=>'8 GB',
    			'695'=>'12 GB',
    			'795'=>'16 GB',
    			], null, ['id'=>'ram_id', 'class'=>'form-control']) !!}
    	</div>

    	<div class="form-group col">
    		{!! Form::label('almacenamiento_id', 'Almacenamiento', ['for'=>'almacenamiento_id']) !!}
    		{!! Form::select('almacenamiento_id', [
    			''=>'Ninguno elegido',
    			'85'=>'256 GB',
    			'170'=>'320 GB',
    			'340'=>'620 GB',
    			'425'=>'750 GB',
    			'700'=>'1 TB',
    			'1000'=>'2 TB',
    			'600'=>'128 GB SSD',
    			'700'=>'256 GB SSD',
    			'1200'=>'512 GB SSD',
    			'2000'=>'1 TB SSD',
    			], null, ['class'=>'form-control']) !!}	
    	</div>

    	<div class="form-group col">
    		{!! Form::label('tamano_id', 'Tamaño', []) !!}
    		{!! Form::select('tamano_id', [
    			''=>'Ninguno elegido',
    			'170'=>'11 pulgadas',
    			'300'=>'13-15 pulgadas',
    			'700'=>'16-17 pulgadas',
    			'1000'=>'18-19 pulgadas'	
    			] , null, ['class'=>'form-control']) !!}
    	</div>

    	<div class="form-group col">
    		 {!! Form::label('marca_id', 'Marca', []) !!} 
    		 {!! Form::select('marca_id',[
    		 	''=>'Ninguno elegido',
    			'700'=>'Apple menor a 2011',
    			'1500'=>'Apple 2012-2015',
    			'1600'=>'Apple 2016-2017',
    			'2500'=>'Apple 2018 o mayor',
    			'150'=>'Dell ',
    			'350'=>'Hp',
    			'850'=>'AliensWare',
    			'200'=>'Toshiba',
    			'200'=>'Lenovo',
    			'200'=>'Asus',
    			'150'=>'Acer',
    			'50'=>'Otras'
    		 	], null, ['class'=>'form-control']) !!}
    	</div>
    </div>
    <div class="d-flex">
    	{!! Form::submit('Guardar', ['class'=>'btn btn-primary ml-auto']) !!}
    </div>
    
	{!! Form::close() !!}

@endsection