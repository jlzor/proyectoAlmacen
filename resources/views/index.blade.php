<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Almacen de Accesorios</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="images/fondo.jpg">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Almacen</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
             @if (!Auth::guest())
                <li><a href="{{url('home')}}">CP - Admin</a></li>
            @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{route('auth/login')}}">Ingresar</a></li>
            <li><a href="{{route('auth/register')}}">Registrar</a></li>
            @else
                    <li>
                        <a href="#">Bienvenido {{ Auth::user()->name }}</a>
                    </li>
                    <li><a href="{{route('auth/logout')}}">Salir</a></li>
                    
              @endif
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
               @if (Session::has('errors'))
        <div class="alert alert-warning" role="alert">
      <ul>
              <strong>Oops!  Algo esta mal, verificalo por favor! </strong>
          @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    @yield('content')
    <!-- Scripts -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    
    <section>
      <h1 align="center"><font color="white">Luxos Accesories</font></h1>
    </section>
     <section class="col-xs-2 ">
    </section>
    <section align="center" class="col-xs-7" style="background: rgba(0,0,0,0);" >
      <div class="container" >
        <div class="col-xs-7">
          <br>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                   <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol> -->

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox" >
            <div class="item active">
               <img src="images/beis6.jpg" alt="beis6"  widht="300px" >
            </div> 
              <div class="item">
                <img src="images/beis3.jpg" alt="beis2"  widht="100px" align="center">
              </div>
          
            <div class="item">
                <img src="images/beis4.jpg" alt="beis4"  widht="300px">
              </div>
          <div class="item">
            <img src="images/beis1.jpg" alt="beis1" width='300%'>
              </div>   
          </div>


 



<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
            </div>
        </div>
    </div>
</section> 
<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
</body>
</html>