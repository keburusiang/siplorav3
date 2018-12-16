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
    <link rel="stylesheet" type="text/css" href="{{asset('perubahan/login/css/login.css')}}">




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
          <a class="nav-item nav-link" href="{{URL::to('/about')}}">About</a>
          
        </div>
      </div>
      </div>
    </nav>
    <!-- Navbar entek -->

    <!-- ISI LOGIN -->
    <div class="container login">
    <div class="card col-lg-4 ">
      <h4 class="card-title text-center pt-3">Login BNBP</h4>
      <div class="card-body p-0 pb-4">
        <form method="POST" action="{{ route('bnpb.login') }}" class="">       
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
                <button  type="submit" class="btn btn-primary mt-2" style="width:100%">Masuk</button>
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