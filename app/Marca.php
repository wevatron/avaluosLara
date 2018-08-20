<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = "c_marcas";
    public $timestamps = false;
    protected $fillable = [
    		'id',
    		'nombreMarca',
    		'valor'
    ];


}
