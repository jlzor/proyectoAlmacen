@extends('layouts.dashboard')
@section('page_heading','Dar de Alta - Sistema de Almacen')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Producto</div>
 
                <div class="panel-body">
                    {!! Form::open(['route' => 'Productos/Bajas/Cantidad', 'class' => 'form']) !!}
		
                    {!! Form::input('hidden','id_usuarios',Auth::user()->id)!!}
                    {!! Form::input('hidden','id_productos',$id_productos)!!}
                    {!! Form::input('hidden','cantidad',$cantidad)!!}
                    {!! Form::input('hidden','id_baja',$id_baja)!!}
                   <div class="form-group">
                        <div class="form-group">
                        	<label>Producto:</label> {{$nombre}}
                        </div>
                        	<label>Provedor:</label> {{$nombreprovedor}}
                        </div>             
                        <div class="form-group">
                            <label>Disponibles:</label>
                            {{ $cantidad }}
                        </div>
                        <div class="form-group">
                            <label>Cantidad para dar de baja:</label> <p style="font-size:18px;color:red">!Atencion¡ No puede dar de baja mas de lo disponible.</p>
                            {!! Form::input('text', 'newCantidad', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::submit('send',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection