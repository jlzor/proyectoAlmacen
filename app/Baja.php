<?php

namespace App;
use App\ReporteBajas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Baja extends Model
{
    protected $table = 'bajas';

    protected $fillable = ['id_usuario','created_at','updated_at'];

    public static function insertar(){
   $usuario = Baja::where('id_usuario','=',Auth::user()->id)->value('id');
   if(!$usuario){
    $Baja = new Baja();
    $Baja->id_usuario = Auth::user()->id;
    $Baja->save();
}
    }
}
