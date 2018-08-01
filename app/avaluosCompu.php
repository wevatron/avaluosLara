<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avaluosCompu extends Model
{
    
    protected $table = "avaluos",
    protected $fillable = [
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
