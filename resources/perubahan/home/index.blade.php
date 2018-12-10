<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- iki Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

    <!-- iki icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- iki font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- iki CSS -->
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <title>SIPLORA</title>
  </head>
  <body>

    <!-- iki Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
      <div class="container">
      <a class="navbar-brand" href="#">SIPLORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active js-scroll-trigger" href="#">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link js-scroll-trigger" href="#about">About</a>
          <a class="nav-item nav-link" href="#map">Map</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
          <a class="nav-item btn btn-primary tombol" href="#">Login</a>
        </div>
      </div>
      </div>
    </nav>
    <!-- Navbar entek -->

    <!-- iki Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Laporkan Lokasi Rawan Bencana</h1>
        <a href="../laporkan/laporkan.blade.php" class="btn btn-danger tombol">LAPORKAN</a> 
        <a href="" class="btn btn-secondary tombol">LACAK LAPORAN</a> 
      </div>
    </div>
    <!-- jumbotron entek -->

    <!-- ISINE -->
    <div class="container">
      
    <!-- info -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="img/employee.png" class="float-left">
              <h4>Melayani</h4>
              <p>lorem5</p>          
            </div>
            <div class="col-lg">
              <img src="img/employee.png" class="float-left">
              <h4>Melayani</h4>
              <p>lorem5</p>          
            </div>
            <div class="col-lg">
              <img src="img/employee.png" class="float-left">
              <h4>Melayani</h4>
              <p>lorem5</p>          
            </div>
          </div>
        </div>
      </div>
    <!-- Akhir info -->

    <!-- about Siplora -->
      <div class="row about" id="about">
        <div class="col-lg-6">
          <img src="img/workingspace.png" alt="about" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h3>About us</h3>
          <p>SIPLORA adalah sistem pelayanan masyarakat guna meningkatkan aksi preventif bencana dengan cara melaporkan lokasi yang rawan terjadi bencana</p>
        </div>    
      </div>
    <!-- Akhir about Siplora -->

    <!-- MAP -->
      <div class="row map" id="map">
        <div class="col-lg-10 mx-auto">
         <h4>PETA SEBARAN LOKASI RAWAN BENCANA</h4>
        </div>        
         <div class="gmap col-lg-12 mx-auto">
                  <iframe id="gmap" src="https://maps.google.com/maps?q=universitas%20islam%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         </div>
      </div>
      <!-- akhir Map -->     

    </div>
    <!-- Akhir isine -->

    <!-- footer -->
    <div class="row footer contact">
       <div class="col text-center">
         <p>2018. Sistem Pelaporan Lokasi Rawan Bencana By Shabaka</p>
       </div>        
    </div>
      <!-- akhir footer -->













    <!-- Optional JavaScript -->     
    <script type="text/javascript" src="js/home.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>

</html>