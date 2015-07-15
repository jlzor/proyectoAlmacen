<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use App\Alta;
use Illuminate\Database\Eloquent\Model;

class ReporteBajas extends Model
{
    protected $table = 'productos_bajas';

    protected $fillable = ['id_bajas','id_usuarios', 'id_productos', 'cantidad','created_at','updated_at'];


     public static function insertar($datos){


    $ReporteBajas = new ReporteBajas();
    $ReporteBajas->id_bajas = $datos->id_baja;
    $ReporteBajas->id_usuarios = $datos->id_usuarios;
    $ReporteBajas->id_productos = $datos->id_productos;
    $ReporteBajas->cantidad = $datos->newCantidad;

    $ReporteBajas->save();

    }

    public static function consultar($id){

         return self::join('users','users.id','=','productos_bajas.id_usuarios')
        ->join('productos','productos.id','=','productos_bajas.id_productos')
        ->select('productos_bajas.id_bajas as folio','users.name as nombreUsuario','productos.nombre as nombreProducto','productos_bajas.cantidad','productos_bajas.created_at as fecha')
        ->where('id_bajas','=',$id)
        ->get();

    }

}
