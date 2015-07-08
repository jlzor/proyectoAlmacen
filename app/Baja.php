<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baja extends Model
{
    protected $table = 'bajas';

    protected $fillable = ['fecha', 'id_usuario'];
}
