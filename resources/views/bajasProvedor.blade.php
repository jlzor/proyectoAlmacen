@extends('layouts.dashboard')
@section('page_heading','Dar de Baja Provedor - Sistema de Almacen')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar Provedor</div>
 
                <div class="panel-body">
                    {!! Form::open(['route' => 'Provedores/Bajas', 'class' => 'form']) !!}

                <div class="form-group">
                <label></label>
        
              
                {!! Form::select('id', $provedores)!!}
       
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