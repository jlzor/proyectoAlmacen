@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('') }}">Sistema Almacen | Equipo 3</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

            
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{Auth::user()->name}}
                        <i class="fa fa-user fa-fw"> </i><i class="fa fa-caret-down"> </i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Mi Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url ('auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li {{ (Request::is('*home') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/home') }}"><i class="fa fa-home fa-fw"></i> Escritorio</a>
                        </li>
                        <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('charts') }}"><i class="fa fa-arrow-circle-o-up fa-fw"></i> Dar de Alta</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*tables') ? 'class="active"' : '') }}>
                            <a href="{{ url ('tables') }}"><i class="fa fa-arrow-circle-o-down fa-fw"></i>Dar de Baja</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Generar Reporte<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url ('login') }}"><i class="fa  fa-arrow-up fa-fw"></i> Historial de Altas</a>
                                </li>
                                <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('blank') }}"><i class="fa  fa-arrow-down fa-fw"></i> Historial de Bajas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

