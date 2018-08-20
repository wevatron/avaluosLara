<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    //
    protected $table = "c_procesador";
    public $timestamps = false;
    protected $fillable = [
    		'id',
    		'nombrePro',
    		'valor'
    ];


}
