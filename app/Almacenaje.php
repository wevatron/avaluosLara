<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacenaje extends Model
{
    //
    protected $table = "c_almacenaje";
    public $timestamps = false;
    protected $fillable = [
    		'id',
    		'nombreAlmacenaje',
    		'valor'
    ];


}
