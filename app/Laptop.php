<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    
    protected $table = "t_equipos";
      public $timestamps = false;
    protected $fillable = [
        'id',
    	'marca',
    	'ram',
    	'almacenamiento',
    	'tamano',
    	'fecha_avaluo',
    	'serie_equipo',
    	'serie_eliminador',
    	'procesador',
    	'ghz',
    	'modelo',
    	'cargador',
    	'puertos',
    	'touch',
    	'camara',
    	'avaluo',
    	'comentarios',
    	'pass'

    ];

}
