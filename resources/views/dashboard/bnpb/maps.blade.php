<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>BNPB Siplora</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
   <link rel="shortcut icon" type="image/png" href="{{asset('perubahan/home/img/favicon.png')}}">
  <!-- Bootstrap CSS     -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

  <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- Animation -->

  <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
  <!-- <link href="{{asset('dashboard/css/animate.min.css')}}" rel="stylesheet"/> -->
  <!--  BS  -->
  <link href="{{asset('dashboard/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
  <!--  DEMO  -->
  <link href="{{asset('dashboard/css/demo.css')}}" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Viga|Roboto|Poppin" rel="stylesheet">

  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
  <link href="{{asset('dashboard/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
  <style >
  .modal-dialog{
  }
  .modal-body   {
    overflow-y: auto;
  }
  .modal {
    position: absolute;
    width: 300px;
    height: 300px;
    top: 550px;
    bottom: 20px;
    left: 60px;
    /*z-index: 10040;*/
    /* overflow-y: hidden!important; */
  }

  @media (min-width: 992px) {
    .modal {
      position: absolute;
      width: 650px;
      margin : auto;
      height: auto;
      top: 250px;
      bottom: 20px;
      /*left: 400px;*/
      z-index: 10040;
      /* overflow-y: hidden!important; */
    }
  }

.card{
  height: 110px;
  box-shadow: 0px 0px 20px #c7cad1;
  transition: 0.3s;

}

.card:hover{    
  transform: translateY(-5px);
}


.card img{
  width: 50px;
  float: right;

}

label {
  font-weight: bold;
  font-size: 40px;
}

  </style>
  <script type="text/javascript">
    $(".modal").click(function(){
      $(".modal").addClass("visible");
    });

    $(".close").click(function(){
      $(".modal").removeClass("visible");
    });

    $(document).click(function(event) {
      //if you click on anything except the modal itself or the "open modal" link, close the modal
      if (!$(event.target).closest(".modal,.js-open-modal").length) {
        $("body").find(".modal").removeClass("visible");
      }
    });

  </script>
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="{{asset('dashboard/img/volcano.jpg')}}">

    <!-- data-color="blue | azure | green | orange | red | purple" -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{URL::to('/')}}" class="simple-text" style="font-family: viga; font-size:30px;">
                    SIPLORA
                </a>
            </div>

            <ul class="nav">
                <!-- <li>
                    <a href="{{URL::to('/bnpb/dashboard/')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li> -->
                <li>
                    <a href="{{URL::to('/bnpb/dashboard/table')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Daftar Laporan</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{URL::to('/bnpb/dashboard/map')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Maps</a>
                </div>
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li >
                      <a class="btn btn-primary"  href="{{ route('bnpb.logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ ('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('bnpb.logout') }}" method="POST" style="display: none;">
                      @csrf
                      </form>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
              <div class="row" >
                <div class="col-lg-3" >
                  <div class="card card-user" ">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-7 pl-3">
                             Total Laporan<br>
                             <label class="hitungan" style="font-size: 40px; font-weight: bold; color: #1D262D;">{{$count0}}</label>
                          </div>
                          <div class="col-xs-5 pl-3">
                             <img src="{{asset('dashboard/img/total.png')}}">
                          </div>
                        </div>                        
                      </div>
                  </div>
                </div>
                <div class="col-lg-3" >
                  <div class="card card-user" ">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-8 pl-3">
                             Laporan Diterima<br>
                             <label class="hitungan" style="font-size: 40px; font-weight: bold; color: #1D262D;">{{$count1}}</label>
                          </div>
                          <div class="col-xs-4 pl-3">
                             <img src="{{asset('dashboard/img/checked.png')}}">
                          </div>
                        </div>                        
                      </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-user" ">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-8 pl-3">
                             Laporan Diproses <br>
                             <label class="hitungan" style="font-size: 40px; font-weight: bold; color: #1D262D;">{{$count2}}</label>
                          </div>
                          <div class="col-xs-4 pl-3">
                             <img src="{{asset('dashboard/img/wait.png')}}">
                          </div>
                        </div>                        
                      </div>
                  </div>
                </div>            
                <div class="col-lg-3">
                  <div class="card card-user" ">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-8 pl-3">
                             Laporan Ditolak<br>
                             <label class="hitungan" style="font-size: 40px; font-weight: bold; color: #1D262D;">{{$count3}}</label>
                          </div>
                          <div class="col-xs-4 pl-3">
                             <img src="{{asset('dashboard/img/cancel.png')}}">
                          </div>
                        </div>                        
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12" align="center">
                      <!-- <div class="card" style="padding:0px !importan; border-radius: 10px; box-shadow: 0px 0px 20px #c7cad1;"> -->
                            <div id="googleMap" class="z-depth-1-half " style="height: 500px;border-radius: 10px; box-shadow: 0px 0px 20px #c7cad1;"></div>
                      <!-- </div> -->
                  </div>
              </div>
            </div>
        </div>
    </div>
  </div>
      @foreach($map as $data)
      <div class="modal" id="modalMaps"   aria-hidden="true" data-backdrop="false">        
          <div class="modal-content">            
            <div id="modalMaps" class="modal-body" >
              <div class="col-md-12">
                <button type="button btn-xl" class="close" data-dismiss="modal" aria-label="Close">
                  <span style="color:red;" >&times;</span>
                </button>
               
                  <div class="row">
                    <b>Jenis Bencana</b><br>
                    <p id="jenisBencana"style="font-size: 12px;"></p>
                  </div>
                  <div class="row">
                    <b>Alamat</b><br>
                    <p id="alamat" style="font-size: 12px;"></p>
                  </div>
              </div>
            </div>
          </div>
      </div>
      @endforeach
</body>

<!--   Core JS Files   -->
<script src="{{asset('dashboard/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Lokasi Charts  -->
<script src="{{asset('dashboard/js/chartist.min.js')}}"></script>
<!--  Lokasi Notifications   -->
<script src="{{asset('dashboard/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOYROYFc-XcfFCMmw5MVlOZc1Tuh_HC2U"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('dashboard/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>
<!-- DEMO -->
<script src="{{asset('dashboard/js/demo.js')}}"></script>
                  <script type="text/javascript">

                var locations = @json($map);
                console.log(map);
                var map = new google.maps.Map(document.getElementById('googleMap'), {
                   zoom: 6,
                   center: new google.maps.LatLng(-3.236001, 111.039169),
                   mapTypeControl: false,
                   mapTypeId: google.maps.MapTypeId.TERRAIN,
                 });

                // lat: -7.543037,
                // lng: 110.485844,

              var icons = {
                  1 :{
                    icon: '/img/diterima.png'
                  },
                  2 :{
                    icon: '/img/diproses.png'
                  },
                  3 :{
                    icon: '/img/ditolak.png'
                  }
              };
              var infowindow = new google.maps.InfoWindow();

              var marker, i;

              for (i = 0; i < locations.length; i++) {

                var id = locations[i].status_id;
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].latitude, locations[i].longitude),
                    icon: icons[locations[i].status_id].icon,
                    map: map
                  });


              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                    // infowindow.setContent(locations[i].jenis_laporan +"  <br> "+ locations[i].alamat);
                    // infowindow.open(map, marker);
                    $('#modalMaps').modal('show');
                    // $('#myModal').modal({backdrop: 'static', keyboard: false})
                    $('#jenisBencana').html(locations[i].jenis_laporan);
                    $('#alamat').html(locations[i].alamat);
                    var s = locations[i].status_id;
                    if (s == 1) {
                      $('#status').html("Diterima");
                    }else if (s == 2) {
                      $('#status').html("Diproses");
                    }
                      $('#status').html("Ditolak");
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

</html>
