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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <!-- iki Bootstrap CSS -->
    <link href="{{asset('perubahan/home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

    <!-- iki icon -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- iki font -->
    <link href="https://fonts.googleapis.com/css?family=Viga|Roboto|Poppin" rel="stylesheet">



    <!-- iki CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('perubahan/home/css/home.css')}}">

    <title>SIPLORA</title>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOYROYFc-XcfFCMmw5MVlOZc1Tuh_HC2U"
    type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </head>
  <body>

    <!-- iki Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand" href="{{URL::to('/')}}">SIPLORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#about">About</a>
          <a class="nav-item nav-link" href="#map">Map</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
          @guest
          <a class="nav-item btn btn-primary" href="{{URL::to('/login')}}">Masuk</a>
          @if (Route::has('register'))
         <!--  <a class="nav-item btn btn-primary" href="{{URL::to('/register')}}">Register</a> -->
          @endif
          @else

          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->namaDepan }}
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{URL::to('/pelapor/dashboard')}}">Dashboard</a>
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

    <!-- iki Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-white">
      <div class="container">
        <h1 class="display-4">Laporkan Lokasi Rawan Bencana</h1>
        <a href="{{URL::to('/lapor')}}" class="btn btn-primary tombol">LAPORKAN</a>
        <!-- <a href="{{URL::to('/lacak')}}" class="btn btn-secondary tombol">LACAK LAPORAN</a>  -->
      </div>
    </div>
    <!-- jumbotron entek -->

    <!-- ISINE -->
   <!--  <div class="container"> -->  
    <section class="section info">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="card">            
           <div class="card-body">
            <img src="{{asset('perubahan/home/img/office.svg')}}" class="card-img float-left">
            <h4>Lapor</h4>
            <p>Laporkan lokasi di sekitar anda.</p>
            </div>            
          </div>          
        </div>
         <div class="col-md">
          <div class="card ">
            <div class="card-body">
            <img src="{{asset('perubahan/home/img/verif.png')}}" class="card-img float-left">
            <h4>Verifikasi</h4>
            <p>Laporan anda akan diverifikasi</p>
            </div>            
          </div>
        </div>
         <div class="col-md">
          <div class="card ">
            <div class="card-body">       
            <img src="{{asset('perubahan/home/img/lacak.png')}}" class="card-img float-left">
            <h4>Lacak</h4>
            <p>Lacak status laporan anda</p>
            </div>            
          </div>
        </div>
         <div class="col-md">
          <div class="card ">
            <div class="card-body">  
            <img src="{{asset('perubahan/home/img/map.png')}}" class="card-img float-left">
            <h4>Map</h4>
            <p>Lihat lokasi yang anda laporkan</p>
            </div>            
          </div>
        </div>        
      </div>
    </div>
    </section>


    <!-- about Siplora -->
    <section class="section about pt-5" id="about">
      <div class="container">
      <div class="row" >
        <div class="col-lg-6">
          <img src="{{asset('perubahan/home/img/iki.jpg')}}" alt="about" class="img-fluid rounded">
        </div>
        <div class="col-lg-5 mn-5">
          <h3>About us</h3>
          <p>SIPLORA adalah sistem pelayanan masyarakat guna meningkatkan aksi preventif bencana dengan cara melaporkan lokasi yang rawan terjadi bencana</p>
          <a href="{{URL::to('/about')}}" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
      </div>
    </section>
    <!-- Akhir about Siplora -->

    <!-- MAP -->
    <section class="section" id="map">
    <div class="container">
      <div class="row map pb-5" >
        <div class="col-lg-10 mx-auto">
         <h4>PETA SEBARAN LOKASI RAWAN BENCANA</h4>
        </div>
         <div class="gmap col-lg-12 mx-auto">
            <div class="form-control" id="googleMap" style="height: 430px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              <script type="text/javascript">
                var locations = @json($map);
                var map = new google.maps.Map(document.getElementById('googleMap'), {
                   zoom: 6,
                   center: new google.maps.LatLng(-3.495488, 111.821524),
                   mapTypeControl: false,
                   mapTypeId: google.maps.MapTypeId.TERRAIN,
                 });

                // lat: -7.543037,
                // lng: 110.485844,
              var infowindow = new google.maps.InfoWindow();

              var marker, i;

              for (i = 0; i < locations.length; i++) {

                var id = locations[i].status_id;
                if(id == 1)
                {

                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].latitude, locations[i].longitude),
                    map: map,
                  });
                }


              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {

                    infowindow.setContent(locations[i].jenis_laporan +"  <br> "+ locations[i].alamat);
                    infowindow.open(map, marker);
                  }
                })(marker, i));
              }
               //  $.each( locations, function( index, value ){
               //    mymap.addMarker({
               //      lat: value.latitude,
               //      lng: value.longitude,
               //    });
               // });
              </script>
            </div>
         </div>
      </div>
      </div>
    </section>
      <!-- akhir Map -->

    <!-- </div> -->
    <!-- Akhir isine -->

    <!-- contact -->
    
   <!-- contact -->
   <section class="contact" id="contact">
      <div class="container">
        <div class="row contact">
            <div class="col-lg-3 pt-3">
              <h4>SIPLORA</h4>
                <div class="footer-links">
                  <a class="" href="#mainNav">Home</a>
                  ·
                  <a href="#about">About</a>
                  ·
                  <a href="#map">Map</a>
                  ·
                  <a href="#contact">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 pt-3">

            </div>
            <div class="col-lg-3 pt-3">

            </div>
            <div class="col-lg-3 pt-3">
              <h4 class="kontak">Contact Us</h4>
              <div class="footer-icons">
                <a href="https://facebook.com/amiinmnugroho"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/amiinmn"><i class="fa fa-twitter"></i></a>
                <a href="https://linkedin.com/in/amiinmn"><i class="fa fa-linkedin"></i></a>
                <a href="https://instagram.com/amiinmn"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
        </div>
      </div>
      </section>
  
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



    <!-- Optional JavaScript -->
<!--     <script type="text/javascript" src="{{asset('js/new-age.min.js')}}"></script>
 -->
<!--  <script type="text/javascript" src="{{asset('css/')}}"></script>
 -->    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>

</html>
