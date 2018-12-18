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


    <link rel="shortcut icon" type="image/png" href="{{asset('perubahan/home/img/favicon.png')}}">
    
     <!-- iki Bootstrap CSS -->
    <link href="{{asset('perubahan/home/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- iki icon -->    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">    

    <!-- iki font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- iki CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('perubahan/login/css/login.css')}}">




  <title>SIPLORA</title>
  </head>
  <body>

    <!-- iki Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="mainNav">
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
          <a class="nav-item btn btn-primary" href="{{URL::to('/login')}}">Login</a>
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
                        {{ ('Logout') }}
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

    <div class="container register">
    <div class="card col-lg-5 ">
      <h4 class="card-title text-center pt-3">Daftarkan Diri Anda</h4>
      <p class="text-center">Sudah punya akun? <a href="{{URL::to('/login')}}" class="card-link">Klik disini</a></p>
      <div class="card-body p-0 pb-4">
        <form class="" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="namaDepan">Nama Depan</label>
                        <input type="text" class="form-control" name="namaDepan" id="namaDepan" placeholder="Nama Depan" required>
                      </div>
                      <div class="form-group col-md">
                        <label for="namaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="namaBelakang" id="namaBelakang" placeholder="Nama Belakang" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@mail.com" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="date">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="telp">Telephone</label>
                        <input type="telp" class="form-control" name="telp" id="telp" placeholder="Telephone" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="password">Ulangi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password" required>
                      </div>
                    </div>
                    <div style="text-align:center;">
                      <button  type="submit" class="btn btn-primary mt-2" style="width:100%">Daftar</button>
                    </div>
                </form>

      </div>
    </div>
    </div>


    <!-- ISINE -->
    <!-- <section class="login" id="login">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mx-auto p-3">

            <form method="POST" action="{{ route('login') }}" class="kotak rounded p-3">
              <h4 class="text-center">Masuk  Akun Anda</h4>
            @csrf
            <div class="form-row">
              <div class="form-group col-md">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>email atau password salah</strong>
                  </span>
                @endif
              </div>
            </div>
              <div style="text-align:center;">
                <button  type="submit" class="btn btn-primary mt-2" style="width:100%">Login</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </section>  -->


    <!-- contact -->
    <div class="contact" id="contact">
      <div class="container">
        <div class="row contact">
            <div class="col-lg-3 pt-3">
              <h4>SIPLORA</h4>
                <p class="footer-links">
                  <a class="page-scroll" href="{{URL::to('/')}}">Home</a>
                  ·
                  <a class="page-scroll" href="{{URL::to('/about')}}">About</a>
                  ·
                  <a class="page-scroll" href="{{URL::to('/')}}#map">Map</a>
                  ·
                  <a class="page-scroll" href="{{URL::to('/')}}#contact">Contact</a>
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
