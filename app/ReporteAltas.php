<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'pruductos_altas';

    protected $fillable = ['id_altas', 'id_productos', 'cantidad'];
}
