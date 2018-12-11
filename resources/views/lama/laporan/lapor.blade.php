@extends('layouts.lapor')
@section('title', 'SIPLORA')
@section('content')

    <section class="login bg-danger" id="login">
      <div class="container">
        <div class="section-heading text-white text-center p-3">
          <h2>Lapor</h2>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul> 
                </div>
            @endif
        </div>
        <div class="row">
          <div class="col-md-10 mx-auto p-3">
          <div class="container bg-light rounded p-3">
            <form action="POST" method="{{ route('lapor') }}">
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
                  <label for="info-alamat">info-alamat</label>
                  <textarea type="textarea" class="form-control" id="info-alamat" placeholder="info-alamat"></textarea>
                </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-5">
                        <label >Latitude</label>
                        <input class="form-control" type="text" id="lat" name="latitude" placeholder="Latitude" value="">
                  </div>
                  <div class="form-group col-md-5">
                        <label >Longitude</label>
                        <input class="form-control" type="text" id="lng" name="longitude" placeholder="Longitude" value="">
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label for="Deskripsi">Deskripsi</label>
                  <textarea type="textarea" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label for="Maps">Pilih Maps</label>
                    <div class="form-control" id="googleMap" style="width:100%;height:550px;"></div>
                </div>
              </div>
              <br>
              <div class="form-row">
                <div class="form-group col-md-5">
                  <button type="submit" class="btn btn-danger">Laporkan</button>
                </div>
              </div>
              
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>


  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection