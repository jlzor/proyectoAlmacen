<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alta extends Model
{
    protected $table = 'altas';

    protected $fillable = ['fecha', 'id_usuario'];
}
