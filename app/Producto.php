<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['nombre','cantidad','id_provedor','created_at', 'updated_at'];

}
