<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>SIPLORA</title>
  </head>
  <body class="bg-danger">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a class="navbar-brand" href="#">SIPLORA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav flex-col ml-md-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Pelaporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lacaklaporan.html">Lacak Laporan</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <div class="container bg-light rounded p-3">
    <form>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="jenisBencana">Jenis Bencana</label>
          <input type="text" class="form-control" id="jenisBencana" placeholder="Tanah Longsor">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="Provinsi">Provinsi</label>
          <input type="text" class="form-control" id="Provinsi" placeholder="Provinsi">
        </div>
        <div class="form-group col-md-5">
          <label for="Kabupaten">Kabupaten</label>
          <input type="text" class="form-control" id="Kabupaten" placeholder="Kabupaten">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="Kecamatan">Kecamatan</label>
          <input type="text" class="form-control" id="Kecamatan" placeholder="Kecamatan">
        </div>
        <div class="form-group col-md-5">
          <label for="Kelurahan">Kelurahan</label>
          <input type="text" class="form-control" id="Kelurahan" placeholder="Kelurahan">
        </div>
        <div class="form-group col-md-2">
          <label for="kodePos">Kode Pos</label>
          <input type="number" class="form-control" id="kodePos" placeholder="Kode Pos">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-10">
          <label for="Deskripsi">Jenis Bencana</label>
          <textarea type="textarea" class="form-control" id="Deskripsi" placeholder="Deskripsi"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-danger">Laporkan</button>
    </form>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
