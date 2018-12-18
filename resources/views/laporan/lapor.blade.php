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
    <link href="https://fonts.googleapis.com/css?family=Viga|Roboto|Poppin|Lato" rel="stylesheet">

    <!-- iki CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('perubahan/laporan/css/laporan.css')}}">

    <!-- MAPS -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOYROYFc-XcfFCMmw5MVlOZc1Tuh_HC2U"
    type="text/javascript"></script>

    


    <script>
      // variabel global marker
      var marker;

      function taruhMarker(peta, posisiTitik){

          if( marker ){
            // pindahkan marker
            marker.setPosition(posisiTitik);
          } else {
            // buat marker baru
            marker = new google.maps.Marker({
              position: posisiTitik,
              map: peta
            });
          }
              convert_latlng(posisiTitik);

           // isi nilai koordinat ke form
          document.getElementById("lat").value = posisiTitik.lat();
          document.getElementById("lng").value = posisiTitik.lng();

          // convert_latlng(posisiTitik);

      }

      // merubah geotag menjadi alamat
      function convert_latlng(pos) {

       // membuat geocoder
       var geocoder = new google.maps.Geocoder();
       geocoder.geocode({'latLng': pos}, function(r) {

        if (r && r.length > 0) {
         document.getElementById('alamat').value = r[0].formatted_address;
        } else {
         document.getElementById('alamat').value = 'Alamat tidak di temukan di lokasi !!';
        }

       });
      }

      function initialize() {
        var propertiPeta = {
          center:new google.maps.LatLng(-7.687739,110.413222),
          zoom:9,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          streetViewControl: false,
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
          taruhMarker(this, event.latLng);
        });

      }


      // event jendela di-load
      google.maps.event.addDomListener(window, 'load', initialize);


      </script>


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
                    <a class="dropdown-item" href="{{URL::to('/pelapor/dashboard')}}">Lacak Laporan</a>
                    <a class="dropdown-item" href="{{URL::to('/pelapor/dashboard/profile/')}}">Profil</a>
                    <div class="dropdown-divider"></div>
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


    <!-- ISINE -->

    <div class="container lapor" id="lapor">
      <form action="/lapor" method="POST">
      <h4 class=" text-center pt-3">Laporkan Lokasi</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="card p-0">        
            <div class="card-body p-0">
              @csrf
                <div class="form-group col-lg-12">
                  <label for="jenisBencana">Jenis Bencana</label>
                  <input type="text" class="form-control" id="jenisBencana"  name="jenisBencana" required>
                  <span> <b>Contoh:</b> Banjir </span>
                </div>
                  <div class="form-group col-lg-12">
                    <label for="deskripsi">Deskripsi Lokasi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="7" required></textarea>
                    <span> <b>Contoh:</b> Tanggul jebol dikhawatirkan terjadi banjir. </span>
                  </div>
                  <div class="form-group col-lg-12">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
                <span> <b>Catatan :</b> Pilih lokasi pada peta.</span>
                <input type="hidden" class="form-control" name="latitude" value="lat" id="lat" >
                <input type="hidden" class="form-control" name="longitude" value="lng" id="lng" >
                </div>
            </div>        
          </div>
      </div>
      <div class="col-md-6">
      <div class="card p-0">
        <div class="card-body p-0">
              <div class="form-group col-lg-12">
                <label for="googleMap">Pilih Maps</label>
                  <div class="form-control" id="googleMap" style="width:100%;height:350px;"></div>
              </div>
            <!-- <div class="form-group col-lg-12">
              <div class="file-field">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" data-multiple-target="{target} files selected" multiple="">
                  <a class="custom-file-label" for="customFile">Pilih Gambar</a>
                </div>
              </div>
            </div> -->
           <div class="form-group">
            <div class="container">
            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
              <label class="custom-control-label" for="customControlValidation1"><a > Laporan ini dapat dipertanggungjawabkan</a></label>              
            </div>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" id="tombollapor" onclick="Swal(
  'Good job!',
  'You clicked the button!',
  'success'
)" class="btn btn-primary">Laporkan</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>



 <!--    <div class="container lapor" id="lapor">
      <div class="row">
        <div class="col-md-8 pt-5 mx-auto">
          <h4 class="text-center">Laporkan Kejadian</h4>
          <form action="/lapor" method="POST">
            @csrf
            <div class="form-group col-lg-12">
              <label for="jenisBencana">Jenis Bencana</label>
              <input type="text" class="form-control" id="jenisBencana"  name="jenisBencana" required>
              <span> <b>Contoh:</b> Banjir </span>
            </div>
              <div class="form-group col-lg-12">
                <label for="deskripsi">Deskripsi Lokasi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                <span> <b>Contoh:</b> Tanggul jebol dikhawatirkan terjadi banjir. </span>
              </div>

      

                <div class="form-group col-lg-12">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>

                <div class="form-row-fluid">
                 <div class="form-group col-lg-6">
                  <label for="latitude">Latitude</label>
                  <input type="text" class="form-control" name="latitude" id="lat" >
                 </div>
                 <div class="form-group col-lg-6">
                   <label for="longitude">Longitude</label>
                   <input type="text" class="form-control" name="longitude" id="lng" >
                 </div>
               </div>

        
              <div class="form-group col-lg-12">
                <label for="googleMap">Pilih Maps</label>
                  <div class="form-control" id="googleMap" style="width:100%;height:450px;"></div>
              </div>
         

            <div class="form-group col-lg-12">
              <div class="file-field">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" data-multiple-target="{target} files selected" multiple="">
                  <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                </div>
              </div>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-primary">Laporkan</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div> -->


    <!-- contact -->
 <section class="contact" id="contact">
      <div class="container">
        <div class="row contact">
            <div class="col-lg-3 pt-3">
              <h4>SIPLORA</h4>
                <div class="footer-links">
                  <a class="page-scroll" href="{{URL::to('/')}}">Home</a>
                  ·
                  <a class="page-scroll" href="{{URL::to('/about')}}">About</a>
                  ·
                  <a class="page-scroll" href="{{URL::to('/')}}#map">Map</a>
                  ·
                  <a class="page-scroll" href="{{URL::to('/')}}#contact">Contact</a>
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


    <!-- JS MAPS -->

   

    <!-- jquery dan kawan kawan -->
    <script src="{{asset('perubahan/home/js/jquery-3.3.1.min.js')}}"></script>
    <!-- <script src="{{asset('perubahan/home/js/bootstrap.bundle.min.js')}}"></script> -->
    <!-- <script src="{{asset('perubahan/home/js/popper.min.js')}}"></script> -->
    <script src="{{asset('perubahan/home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('perubahan/home/js/sweetalert.min.js')}}"></script>


  </body>
</html>
