@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Sewa Mobil</div>
                <div class="card-body">
                    <form method="post" action="/sewa" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="mobil_id">Pilih Mobil</label>
                            <select id="mobil_id" class="form-control" name="mobil_id" required>
                                @foreach($mobils as $mobil)
                                <option value="{{ $mobil->id }}">{{ $mobil->merek }} - {{ $mobil->model }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="user_id">Tanggal Mulai</label>
                            <input id="user_id" type="text" class="form-control" name="user_id" required>
                        </div>
                        <!-- Tanggal mulai peminjaman -->
                        <div class="form-group mb-3">
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input id="tanggal_mulai" type="date" class="form-control" name="tanggal_sewa" required>
                        </div>
                        <!-- Tanggal selesai peminjaman -->
                        <div class="form-group mb-3">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input id="tanggal_selesai" type="date" class="form-control" name="tanggal_kembali"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input id="tanggal_selesai" type="number" class="form-control" name="jumlah_hari" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input id="tanggal_selesai" type="number" class="form-control" name="total_bayar" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection