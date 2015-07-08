<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'pruductos_bajas';

    protected $fillable = ['id_salidas', 'id_productos', 'cantidad'];
}
