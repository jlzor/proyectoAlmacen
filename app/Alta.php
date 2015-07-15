<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Alta extends Model
{
    protected $table = 'altas';

    protected $fillable = ['id_usuario','created_at','updated_at'];

    public static function Insertar(){

    $Alta = new Alta();
    $Alta->id_usuario = Auth::user()->id;

    $Alta->save();

    }
}


