@extends('dashboard.master')

@section('title', 'Login')

@section('content')
    <div class="left-side">
        <h1>TulisAja</h1>
        {{-- <img src="{{ asset('storage/img/cover_regis.png') }}" alt="Buku dan Laptop"> --}}
    </div>

    <div class="right-side">
        <div class="container">
            <h2>Form Login</h2>
            <form action="/proses_login" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>

                <input type="submit" value="Daftar">
                <p class="signup-link">Belum punya akun? <a href="{{  route('registrasi') }}">Daftar Sekarang</a></p>
            </form>
        </div>
    </div>
@endsection
