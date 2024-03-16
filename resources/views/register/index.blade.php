@extends('login.layouts.main')

@section('container')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="login-box">
        <h2>Daftar</h2>
        <form action="/register" method="post">
            @csrf
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Username" required><br>

            <label for="name">Nama Lengkap:</label><br>
            <input type="text" id="name" name="name" placeholder="Nama Lengkap" required><br>

            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required><br>

            <label for="no">Nomor Telepon:</label><br>
            <input type="text" id="no" name="no" placeholder="08*********" pattern="[0-9]{4,14}" required><br>

            <label for="sim">Nomor SIM:</label><br>
            <input type="text" id="sim" name="sim" placeholder="36*******" pattern="[0-9]{6,}" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>

            <input type="submit" value="Daftar">
        </form>
        <p>Sudah punya akun? <a href="/login">Login</a></p>
    </div>
</div>
@endsection