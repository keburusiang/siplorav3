<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

            <!-- Custom styles for this template -->
        <link href="{{asset('css/new-age.min.css')}}" rel="stylesheet">
            <link href="{{ asset('css/ScrollTrigger.css') }}" rel="stylesheet">

            <!-- Bootstrap core JavaScript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



</head>
<body id="page-top">
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{URL::to('/')}}"><strong>SIPLORA</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#login">Login/Register</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#map">Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{URL::to('/login')}}">Login</a>
            </li>
            <li class="nav-item">
            @if (Route::has('register'))
                <a class="nav-link js-scroll-trigger" href="{{URL::to('/register')}}">Register</a>
            @endif
            </li>
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->namaDepan }} 
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  @section('content')

  @show
        <!-- Plugin JavaScript -->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for this template -->
        <script src="{{asset('js/new-age.min.js')}}"></script>
        <script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
        <script>
        window.counter = function() {
            // this refers to the html element with the data-scroll-showCallback tag
            var span = this.querySelector('span');
            var current = parseInt(span.textContent);

            span.textContent = current + 1;
        };

        document.addEventListener('DOMContentLoaded', function(){
          var trigger = new ScrollTrigger({
              addHeight: true
          });
        });
        </script>

</body>
</html>