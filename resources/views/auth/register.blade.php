@extends('layouts.siplora')
@section('title', 'SIPLORA')
@section('content')
    <!-- Di bawah NavBar -->
    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Laporkan Lokasi Yang Berpotensi Akan Terjadi Bencana!</h1>
              <a href="laporkan.html" class="btn btn-outline btn-xl js-scroll-trigger">LAPORKAN</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
                    <!-- isi cuy -->
          </div>
        </div>
      </div>
    </header>

    <section class="about" id="about">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Tentang SIPLORA</h2>
          <p class="text-muted">Sistem Pelaporan Lokasi Rawan Bencana</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">

          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="about-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Device Mockups</h3>
                    <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="about-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Flexible Use</h3>
                    <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="about-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Free to Use</h3>
                    <p class="text-muted">As always, this theme is free to login and use for any purpose!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="about-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Open Source</h3>
                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta" id="map">
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Start building.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="login bg-danger" id="login">
      <div class="container">
        <div class="section-heading text-white text-center p-3">
          <h2>Login atau Registrasi</h2>
        </div>
        <div class="row">
          <div class="col-md-5 mx-auto p-3">
            <form method="POST" action="{{route('login')}}" class="bg-light rounded p-3">
            @csrf
            <h3 class="text-center">LOGIN</h3>
            <div class="form-row">
              <div class="form-group col-md">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
              </div>
            </div>
            <button type="submit" class="btn btn-outline btn-xl">Login</button>
            </form>
          </div>
          <div class="col-md-5 mx-auto p-3">
                <form method="POST" action="{{ route('register') }}" class="bg-light rounded p-3">
                @csrf
                    <h3 class="text-center">REGISTRASI</h3>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="namaDepan">Nama Depan</label>
                        <input type="text" class="form-control" name="namaDepan" id="namaDepan" placeholder="Nama Depan" required>
                      </div>
                      <div class="form-group col-md">
                        <label for="namaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="namaBelakang" id="namaBelakang" placeholder="Nama Belakang" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@mail.com" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="date">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="telp">Telephone</label>
                        <input type="telp" class="form-control" name="telp" id="telp" placeholder="Telephone" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md">
                        <label for="password">Ulangi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-outline btn-xl">Register</button>
                </form>

          </div>
        </div>
      </div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fas fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; Your Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

@endsection