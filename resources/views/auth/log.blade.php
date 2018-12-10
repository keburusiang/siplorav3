@extends('layouts.siplora')
@section('title', 'SIPLORA')
@section('content')
    <section class="login bg-danger" id="login">
      <div class="container">
        <div class="section-heading text-white text-center p-3">
          <h2>Login</h2>
        </div>
        <div class="row">
          <div class="col-md-5 mx-auto p-3">
            <form method="POST" action="{{ route('login') }}" class="bg-light rounded p-3">
            @csrf
            <div class="form-row">
              <div class="form-group col-md">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>email atau password salah</strong>
                  </span>
                @endif
              </div>
            </div>
            <div style="text-align:center;">
                      <button  type="submit" class="btn btn-outline btn-xl">Login</button>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection