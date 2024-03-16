@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        @foreach($mobils as $mobil)
        @if($mobil->status == 1)
        <div class="col-md-4 p-4">
            <div class="card">
                <img src="img/car.jpg" class="card-img-top" alt="Car">
                <div class="card-body">
                    <h5 class="card-title">{{ $mobil->merek }}</h5>
                    <p class="card-text">Model: {{ $mobil->model }}</p>
                    <p class="card-text">Harga: {{$mobil->tarif_per_hari}}</p>
                    @if(auth()->check())
                    <a href="/sewa" class="btn btn-primary">Sewa</a>
                    @else
                    <a href="/login" class="btn btn-primary">Sewa</a>
                    @endif
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection