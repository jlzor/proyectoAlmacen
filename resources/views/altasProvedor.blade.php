@extends('layouts.dashboard')
@section('page_heading','Dar de Alta - Sistema de Almacen')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Provedores</div>
 
                <div class="panel-body">
                    {!! Form::open(['route' => 'Provedores/Altas', 'class' => 'form']) !!}

                    {!! Form::input('hidden','id_usuario',Auth::user()->id)!!}

            <div class="form-group">
                <label>Categoria</label>
        
              
                {!! Form::select('id_categoria', $categorias)!!}
       
            </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Nombre</label>
                            {!! Form::input('text', 'nombre', '', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Direccion</label>
                            {!! Form::input('text', 'direccion', '', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Telefono</label>
                            {!! Form::input('text', 'telefono', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            {!! Form::input('text', 'ciudad', '', ['class'=> 'form-control']) !!}
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