<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $table = 'provedores';

    protected $fillable = ['nombre', 'id_categoria', 'direccion', 'telefono', 'ciudad','id_usuario','created_at','updated_at'];
}
