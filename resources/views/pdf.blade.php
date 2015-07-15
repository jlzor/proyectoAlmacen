@extends('layouts.dashboard')
@section('page_heading','Dar de Alta - Sistema de Almacen')
@section('section')

                  @foreach($arreglo as $baja)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <p style="font-size:40px">Folio: {{$baja[1]->Folio}} </p>
                                </div>
                                <div class="col-xs-3">
                                    <p style="font-size:40px">Usuario: {{$baja[1]->name}}</p>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="huge">{{$baja[0]}}</div>
                                    <div>Productos dados de baja!!</div>
                                </div>
                            </div>
                        </div>
                         <a href="{{route('crearPdf',[$baja[1]->Folio])}}">
                            <div class="panel-footer">
                                <span class="pull-left">Generar PDF</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    @endforeach
@endsection