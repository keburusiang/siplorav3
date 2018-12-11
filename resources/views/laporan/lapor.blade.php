<!doctype html>
<html lang="en">
  <head>
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
    <link rel="stylesheet" type="text/css" href="{{asset('perubahan/laporan/css/laporan.css')}}">

    <title>SIPLORA</title>
  </head>
  <body>

    <!-- iki Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
      <div class="container">
      <a class="navbar-brand" href="../home/index.blade.php">SIPLORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active js-scroll-trigger" href="../home/index.blade.php">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link js-scroll-trigger" href="#about">About</a>
          <a class="nav-item nav-link js-scroll-trigger" href="#map">Map</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
          <a class="nav-item btn btn-primary tombol" href="#">Login</a>
        </div>
      </div>
      </div>
    </nav>
    <!-- Navbar entek -->
    

    <!-- ISINE -->
    <div class="container lapor mx-auto" id="lapor">
      <div class="row mx-auto tet">        
        <div class="col-lg-6 pt-5">
          <form>
            <div class="form-group">
              <label for="jenisBencana">Jenis Bencana</label>
              <input type="text" class="form-control" id="jenisBencana" placeholder="contoh: Banjir" name="jenisBencana">
                <option>Banjir</option>
                <option>Tanah Longsor</option>
                <option>Kebakaran</option>                
              </select>
            </div>                     
            <div class="form-group">
              <label for="deskripsi">Deskripsi Lokasi</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Pilih Pada Peta">
            </div>
            <!-- MAP -->
             <div class="row map" id="map">                    
                <div class="gmap col-lg">
                  <iframe id="gmap" src="https://maps.google.com/maps?q=universitas%20islam%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="5" marginwidth="5"></iframe>
                </div>
            </div> 
            <!-- akhir Map -->                       
            <div class="file-field">              
              <div class="custom-file">
                <input type="file" class="custom-file-input" data-multiple-target="{target} files selected" multiple="">
                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary tombol">Laporkan</button>
          </form>
        </div>        
      </div>
    </div>


    <!-- contact -->
    <div class="contact" id="contact">
      <div class="container">
        <div class="row contact">         
            <div class="col-lg-4 pt-3">
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
            <div class="col-lg-4 pt-3">
              
            </div>
            <div class="col-lg-4 pt-3">
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
      <div class="row copyright pt-3">
        <div class="col text-center">
         <p>2018. Sistem Pelaporan Lokasi Rawan Bencana By Shabaka</p>
        </div>        
      </div>
    </footer>
    <!-- akhir footer -->













    <!-- Optional JavaScript -->
    <!-- <script type="text/javascript" src="js/laporkan.js"></script>  -->   
   

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>