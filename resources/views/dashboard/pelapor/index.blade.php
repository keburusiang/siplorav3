<!doctype html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="{{asset('dashboards/img/favicon.ico')}}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>User Siplora</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap CSS     -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Animation -->
    <link href="{{asset('dashboard/css/animate.min.css')}}" rel="stylesheet"/>
    <!--  BS  -->
    <link href="{{asset('dashboard/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
    <!--  DEMO  -->
    <link href="{{asset('dashboard/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="{{asset('dashboard/img/volcano.jpg')}}">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    SIPLORA
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="{{URL::to('/pelapor/dashboard/')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/pelapor/dashboard/profile/')}}">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
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
										</button>
										<a class="navbar-brand" href="#">{{$pelapor->namaDepan}} {{$pelapor->namaBelakang}}</a>
								</div>
								<div class="collapse navbar-collapse">
										<ul class="nav navbar-nav navbar-right">
											<li >
												<a class="btn btn-primary"  href="{{ route('logout') }}"
														onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
														{{ ('Logout') }}
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
												</form>
											</li>
										</ul>
								</div>
						</div>
				</nav>
				<div class="content">
            <div class="row">
                <div class="col-md-12">
									<!-- LOOP DATA LAPORAN -->
									@foreach ($data as $laporan)
                    <div class="card mb-1 ml-4" style="width:98%; margin-left: 1%;">
                        <div class="header">
													<div class="row">
														<div class="col-xs-10">
															<h4 class="title">Kode Laporan : <b>{{$laporan->kode_laporan}}</b></h4>
														</div>
														<div class="col-xs-2">
																@if($laporan->status_id == 1)
																<div class="alert alert-success notif ">
																		<span><b>Diterima</b></span>
																</div>
																@elseif($laporan->status_id == 2)
																<div class="alert alert-warning notif">
																		<span><b>Diproses</b></span>
																</div>
																@else
																<div class="alert alert-danger notif">
																		<span><b>Ditolak</b></span>
																</div>
																@endif
														</div>
													</div>
                        </div>
                        <div class="content infocon">
                            <div class="row infodes">
                                <div class="col-md-6">
																	<h5>Jenis Laporan</h5>
																	<div class="alert alert-info">
																			<span>{{$laporan->jenis_laporan}}</span>
																	</div>
                                </div>
																<div class="col-md-6">
																	<h5>Deskripsi</h5>
																	<div class="alert alert-info">
																			<span>{{$laporan->deskripsi}}</span>
																	</div>
																</div>
                                <div class="col-md-6">
																	<h5>Alamat</h5>
																	<div class="alert alert-info">
																			<span>{{$laporan->alamat}}</span>
																	</div>
                                </div>

                            </div>
                        <!-- content -->
                        </div>
                        <br>
                        <!-- card -->
                    </div>

										@endforeach
                </div>
            </div>
        </div>
<!-- footer -->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left"></nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Shabaka Tim</a>, Sistem Pelaporan Lokasi Rawan Bencana
                </p>
            </div>
        </footer>
    </div>
</div>
</body>

    <!--   Core JS Files   -->
		<script src="{{asset('dashboard/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('dashboard/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<!--  Lokasi Charts  -->
		<script src="{{asset('dashboard/js/chartist.min.js')}}"></script>
    <!--  Lokasi Notifications   -->
    <script src="{{asset('dashboard/js/bootstrap-notify.js')}}"></script>
    <!--  Google Maps    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
		<script src="{{asset('dashboard/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>
		<!-- DEMO -->
		<script src="{{asset('dashboard/js/demo.js')}}"></script>
		<script type="text/javascript">
		var pelapor = <?php print_r(json_encode($pelapor)) ?>;
		console.log(pelapor);
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-id',
            	message: "Selamat datang " + pelapor['namaDepan'],
            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
			</script>

</html>
