<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provedor;
use App\Producto;
use App\Alta;
use DB;
use App\ReporteBajas;
use App\Baja;
use App\Categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

   public function crearPdf($id){

        $reporte = ReporteBajas::consultar($id);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('generarPdf',compact('reporte'));
        
        return $pdf->stream();
    }

    public function getHistorial(){
        $bajas = Baja::join('users', 'users.id','=','bajas.id_usuario')
        ->select('bajas.id as Folio','users.name')
        ->get();
        $arreglo = array();
        foreach($bajas as $baja){
        $contador = ReporteBajas::where('productos_bajas.id_bajas','=',$baja->Folio)
        ->get();
        $contador = count($contador);
        $arreglo[] = array($contador, $baja);
        }
             return view('pdf',compact('arreglo'));
   
    }

    public function getBajaCategoria(){
       $categorias = Categoria::lists('nombre','id');
        return view('bajasCategoria', compact('categorias'));
    }

    public function BajaCategoria(Request $request){

       $categorias = Categoria::lists('nombre','id');
       Categoria::where('id','=',$request->id)->delete();
        return view('altasCategoria');
    }


    public function getAltaCategoria(){

        return view('altasCategoria');
    }

    public function altaCategoria(Request $request){

        Categoria::create($request->all());

        return view('altasCategoria');
    }

    public function getBajaProducto(){
       $productos = Producto::lists('nombre','id');
        Baja::insertar();
        return view('bajasProducto', compact('productos'));
    }

    public function bajaProducto(Request $request){

        $id_productos = $request->id;
        $id_usuarios = $request->id_usuarios;
        $nombre_producto = $request->nombre;
        $cantidad = DB::table('productos')->where('id',$id_productos)->value('cantidad');
        $nombre = DB::table('productos')->where('id',$id_productos)->value('nombre');
        $idprovedor = DB::table('productos')->where('id',$id_productos)->value('id_provedor');
        $nombreprovedor = DB::table('provedores')->where('id',$idprovedor)->value('nombre');
        $id_baja = DB::table('bajas')->where('id_usuario',$id_usuarios)->value('id');

        return view('bajas', compact('request','cantidad','nombre','nombreprovedor','id_baja','id_productos'));
    }

  /*      public function getBajaCantidadProducto(){

        return view('bajas', compact('productos'));
    }

*/
    public function bajaCantidadProducto(Request $request){
        $productos = Producto::lists('nombre','id','cantidad');
        $id_usuarios = $request->id_usuarios;
        $id_productos = $request->id_productos;
        $cantidad = $request->cantidad;
        $nombre = DB::table('productos')->where('id',$id_productos)->value('nombre');        
        $id_baja = DB::table('bajas')->where('id_usuario',$id_usuarios)->value('id');
        $idprovedor = DB::table('productos')->where('id',$id_productos)->value('id_provedor');
        $nombreprovedor = DB::table('provedores')->where('id',$idprovedor)->value('nombre');
        ReporteBajas::insertar($request);
        return view('bajas', compact('productos','id_productos','cantidad','id_baja','nombre','nombreprovedor','idprovedor'));
    }


    public function getProducto(){
        $provedores = Provedor::lists('nombre','id');
        return view('altasProducto', compact('provedores'));
    }

    public function altaProducto(Request $request){

        Producto::create($request->all());
        $provedores = Provedor::lists('nombre', 'id');
        Alta::Insertar();

        return view('altasProducto', compact('provedores'));
    }

 public function getProvedor(){
        $categorias = Categoria::lists('nombre','id');
        return view('altasProvedor', compact('categorias'));
    }

    public function altaProvedor(Request $request){
        $categorias = Categoria::lists('nombre', 'id');
        Provedor::create($request->all());
          

    return view('altasProvedor', compact('categorias'));
      
    }

        public function getBajaProvedor(){
       $provedores = Provedor::lists('nombre','id');
        return view('bajasProvedor', compact('provedores'));
    }

    public function BajaProvedor(Request $request){
        $categorias = Categoria::lists('nombre','id');
       $provedores = Provedor::lists('nombre','id');
       Provedor::where('id','=',$request->id)->delete();
        return view('altasProvedor',compact('categorias'));
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
