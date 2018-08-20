<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    //
    protected $table = "c_rams";
    public $timestamps = false;
    protected $fillable = [
    		'id',
    		'nombreRam',
    		'valor'
    ];


}
