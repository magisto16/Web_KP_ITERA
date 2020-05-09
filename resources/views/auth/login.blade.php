@extends('layouts.auth')
@section('title') Masuk @stop
@section('content')
<div class="col-3 col-s-12 content">

    <h3 style="text-align: center">Masuk</h3>
    <form class="col-12 col-s-12 form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi:</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" name="password" required>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Masuk</button>
        <br>
        <br>
        <a href="{{ route('register') }}">Belum Memiliki Akun? <b>Daftar!</b></a>
    </form>

</div>
@endsection