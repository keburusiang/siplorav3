@extends('layouts.siplora')
@section('title', 'SIPLORA')
@section('content')
    <section class="login bg-danger" id="login">
      <div class="container">
        <div class="section-heading text-white text-center p-3">
          <h2>Register</h2>
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
          <div class="col-md-5 mx-auto p-3">
                <form method="POST" action="{{ route('register') }}" class="bg-light rounded p-3">
                @csrf
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
                    <div style="text-align:center;">
                      <button  type="submit" class="btn btn-outline btn-xl">Register</button>
                    </div>
                </form>

          </div>
        </div>
      </div>
    </section>
    @endsection