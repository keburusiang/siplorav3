<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>BNPB Siplora</title>

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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('dashboard/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="{{asset('dashboard/img/volcano.jpg')}}">

    <!-- data-color="blue | azure | green | orange | red | purple" -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    SIPLORA
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboardBnpb.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="tableBnpb.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="mapsBnpb.html">
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
                    <a class="navbar-brand" href="#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Tabel Verifikasi Laporan</h4>
                                <p class="category">Berdasar Data Laporan yang masuk lewat SIPLORA</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Verif</th>
                                        <th>Kode Laporan</th>
                                    	<th>Tanggal</th>
                                    	<th>Jenis Bencana</th>
                                    	<th>Lokasi Bencana</th>
                                    	<th>Nama Pelapor</th>
                                        <th>Tolak</th>
                                    </thead>
                                    <tbody>
																			@foreach($data as $tol)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                  <input id="checkbox1" type="checkbox">
                                                   <label for="checkbox1"></label>
                                                 </div>
                                             </td>
                                        	<td>1</td>
                                        	<td>10/23/2018</td>
                                        	<td>{{$tol->jenis_laporan}}</td>
                                        	<td>{{$tol->alamat}}</td>
                                        	<td>{{$tol->namaDepan}}</td>
                                            <td><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button></td>
                                        </tr>
																				@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
												<div class="card">

                            <div class="header">
                                <h4 class="title">Tabel Belum Laporan</h4>
                                <p class="category">Berdasar Data Laporan yang masuk lewat SIPLORA</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Verif</th>
                                        <th>Kode Laporan</th>
                                    	<th>Tanggal</th>
                                    	<th>Jenis Bencana</th>
                                    	<th>Lokasi Bencana</th>
                                    	<th>Nama Pelapor</th>
                                        <th>Tolak</th>
                                    </thead>
                                    <tbody>
																			@foreach($data2 as $tol)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                  <input id="checkbox1" type="checkbox">
                                                   <label for="checkbox1"></label>
                                                 </div>
                                             </td>
                                        	<td>1</td>
                                        	<td>10/23/2018</td>
                                        	<td>{{$tol->jenis_laporan}}</td>
                                        	<td>{{$tol->alamat}}</td>
                                        	<td>{{$tol->namaDepan}}</td>
                                            <td><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button></td>
                                        </tr>
																				@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

</html>
