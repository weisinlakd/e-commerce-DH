<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
    public $table = "ciudades";
    public $timestamps  = false;
    public $guarded = [];
}
