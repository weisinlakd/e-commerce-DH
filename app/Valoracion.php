<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    //
    public $table = "valoraciones";
    public $timestamps  = false;
    public $guarded = [];
}
