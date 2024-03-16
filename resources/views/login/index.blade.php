@extends('login.layouts.main')

@section('container')
<div class="container">
    <div class="login-box">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close text-end" data-bs-dismiss="alert" aria-label="Close">x</button>
        </div>
        @endif
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <p>Belum punya akun? <a href="/register">Daftar</a></p>
    </div>
</div>
@endsection