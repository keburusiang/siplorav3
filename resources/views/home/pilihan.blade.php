<!doctype html>
<html lang="en">
  <head>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- iki Bootstrap CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- iki icon -->    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">    

    <!-- iki font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- iki CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('perubahan/login/css/pilihan.css')}}">




  <title>SIPLORA</title>
  </head>
  <body>

    <!-- iki Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
      <div class="container">
      <a class="navbar-brand" href="{{URL::to('/')}}">SIPLORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="{{URL::to('/')}}">Home<span class="sr-only">(current)</span></a>          
          <a class="nav-item nav-link" href="#contact">Contact</a>
          @guest
          <a class="nav-item btn btn-primary" href="{{URL::to('/pilihan')}}">Masuk</a>
          @if (Route::has('register'))
         <!--  <a class="nav-item btn btn-primary" href="{{URL::to('/register')}}">Register</a> -->
          @endif
          @else

          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->namaDepan }} 
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ ('Keluar') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
            </li>
        @endguest
        </div>
      </div>
      </div>
    </nav>
    <!-- Navbar entek -->

    <!-- ISI LOGIN -->
    <div class="container pilihan">         
      <div class="row pt-5">
         <div class="col">
            <h3 class="text-center">Masuk Sebagai</h3>
          </div>
        </div>
      <div class="row text-center">
        <div class="col col-xl-3 m-4">
          <div class="card pl-4 pr-4">
            <h4 class="card-title text-center pt-3">Pelapor</h4>            
            <div class="card-body p-0 pb-4">
              <img src="{{asset('perubahan/home/img/profile1.png')}}">
                <div>
                  <a class="nav-item btn btn-primary" style="width:100%" href="{{URL::to('/login')}}">Masuk</a>
                </div>                
            </div>
          </div>
        </div>
        <div class="col col-xl-3 m-4">
          <div class="card pl-4 pr-4">
            <h4 class="card-title text-center pt-3">BNPB</h4>          
            <div class="card-body p-0 pb-4">
            <img src="{{asset('perubahan/home/img/profile2.png')}}">           
              <div>
                <a class="nav-item btn btn-primary" style="width:100%" href="{{URL::to('/loginBnpb')}}">Masuk</a>
              </div>                
            </div>
          </div>    
        </div>
      </div>
    </div>    


    <!-- contact -->
    <div class="contact" id="contact">
      <div class="container">
        <div class="row contact">         
            <div class="col-lg-3 pt-3">
              <h4>SIPLORA</h4>
                <p class="footer-links">
                  <a class="" href="#mainNav">Home</a>
                  ·
                  <a href="#about">About</a>
                  ·
                  <a href="#map">Map</a>
                  ·                  
                  <a href="#contact">Contact</a>
                </p>
            </div>    
            <div class="col-lg-3 pt-3">
             
            </div>  
            <div class="col-lg-3 pt-3">
             
            </div>           
            <div class="col-lg-3 pt-3">
              <h4>Contact Us</h4>
              <div class="footer-icons">
                <a href="https://facebook.com/amiinmnugroho"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/amiinmn"><i class="fa fa-twitter"></i></a>
                <a href="https://linkedin.com/in/amiinmn"><i class="fa fa-linkedin"></i></a> 
                <a href="https://instagram.com/amiinmn"><i class="fa fa-instagram"></i></a>         
              </div>              
            </div>       
        </div>
      </div>
    </div>   
    <!-- akhir contact -->

    <!-- footer -->
    <footer>
      <div class="container-fluid">
      <div class="row copyright pt-3">
        
        <div class="col text-center">
         <p>2018. Sistem Pelaporan Lokasi Rawan Bencana By Shabaka</p>
        </div>
        </div>        
      </div>
    </footer>

    <!-- akhir footer -->


    <!-- JS MAPS -->

   

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  
    
  </body>
</html>