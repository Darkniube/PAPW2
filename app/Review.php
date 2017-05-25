<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
	use SoftDeletes;

    protected $table = "review";

    protected $primaryKey = 'idreview'; 

    protected $fillable = [
       'titulo','texto','iduser','idgenre','anio','r_imagen'
    ];
    
    protected $dates = ['deleted_at'];

    
}
