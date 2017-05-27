<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $table = "coment";

    protected $fillable = [
        'texto','iduser','idreview','t_creacion',
    ];
}
