

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <style>
        #password{
            border: 1px solid #CCC;
            
        }
        
        #p-password{
            font-size: 1.5em;
            color:#868E96;
            margin-bottom: 0px !important; 
        }
        
        .eliminar{
            width: 151px;
        }
    
    </style>

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
 


  <!-- Custom fonts for this template -->
    {!! Html::style('vendor/fontawesome-free/css/all.min.css')!!}
     {!! Html::style("https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic") !!}
{!! Html::style("https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'") !!}
  <!-- Custom styles for this template -->
      {!! Html::style('css/clean-blog.min.css') !!}
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{route('index')}}">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">Acerca de</a>
          </li>
          
          {{-- Llamamos al usuarios que esta en la sesion actual --}}
          {{-- Si hay un usuario con sesion iniciada --}}
          
          @if(!Auth::user())
          
          <li class="nav-item">
              <a class="nav-link" href="{{route('user.create')}}">Registrarme</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{url('/auth')}}">Iniciar sesión</a>
          </li>          
          
          @else
          
          <div class="dropdown">
              <button style="font-size:0.6em; padding-top:0.8em;" class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->name}}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Ver perfil</a>
                <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
              </div>
          </div>
         
         @endif
          

          <li class="nav-item">
              <a class="nav-link" href="{{route('user.index')}}">Ver usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  
  
  <header class="masthead" style="background-image: url({{ asset('img/home-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          @yield('content')
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website {{date('Y')}}</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  {!! Html::script("vendor/jquery/jquery.min.js") !!}
  
  {!! Html::script("vendor/bootstrap/js/bootstrap.bundle.min.js") !!}

  <!-- Custom scripts for this template -->
  {!! Html::script("js/clean-blog.min.js") !!}

</body>

</html>
