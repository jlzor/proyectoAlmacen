@extends('layouts.dashboard')
@section('page_heading','Historial de Bajas - Sistema de Almacen')
@section('section')

                  @foreach($arreglo as $baja)
                    <div class="panel panel-primary">
                         <a href="{{route('crearPdf',[$baja[1]->Folio])}}">
                            <div class="panel-footer">
                                <span class="pull-left">Generar PDF</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <p style="font-size:20px">Folio: {{$baja[1]->Folio}} </p>
                                </div>
                                <div class="col-xs-4">
                                    <p align="center" style="font-size:20px">Usuario: {{$baja[1]->name}}</p>
                                </div>
                                <div style="font-size:20px" class="col-xs-5 text-right">
                                 Productos dados de baja: {{$baja[0]}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
@endsection