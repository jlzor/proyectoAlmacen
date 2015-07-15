@extends('layouts.dashboard')
@section('page_heading','Dar de Alta - Sistema de Almacen')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Producto</div>
 
                <div class="panel-body">
                    {!! Form::open(['route' => 'Categorias/Bajas', 'class' => 'form']) !!}

                <div class="form-group">
                <label></label>
        
              
                {!! Form::select('id', $categorias)!!}
       
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