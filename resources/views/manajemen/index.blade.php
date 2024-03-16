@extends('manajemen.layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Penjualan</h1>

</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
            </div>
            <div class="col-md-6 justify-content-end">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah"
                    style="float: right;">
                    Tambah
                </button>
            </div>
        </div>

    </div>
    <div class="card-body">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close text-end" data-bs-dismiss="alert" aria-label="Close">x</button>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Model</th>
                        <th scope="col">Nomor Plat</th>
                        <th scope="col">Tarif Per Hari</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mobils as $mobil)
                    <tr>
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $mobil->merek }}</td>
                        <td>{{ $mobil->model }}</td>
                        <td>{{ $mobil->nomor_plat }}</td>
                        <td>{{ $mobil->tarif_per_hari }}</td>
                        <td>{{ $mobil->status == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/manajemen" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="merekInput">Merek Mobil</label>
                        <input type="text" name="merek" class="form-control" id="merekInput"
                            placeholder="Masukkan merek mobil">
                    </div>
                    <div class="form-group">
                        <label for="modelInput">Model Mobil</label>
                        <input type="text" name="model" class="form-control" id="modelInput"
                            placeholder="Masukkan model mobil">
                    </div>
                    <div class="form-group">
                        <label for="nomorPlatInput">Nomor Plat</label>
                        <input type="text" name="nomor_plat" class="form-control" id="nomorPlatInput"
                            placeholder="Masukkan nomor plat">
                    </div>
                    <div class="form-group">
                        <label for="tarifInput">Tarif Per Hari</label>
                        <input type="number" name="tarif_per_hari" class="form-control" id="tarifInput"
                            placeholder="Masukkan tarif per hari">
                    </div>
                    <div class="form-group">
                        <label for="gambarInput">Gambar Mobil</label>
                        <input type="file" name="gambar" class="form-control-file" id="gambarInput">
                    </div>
                    <div class="form-group">
                        <label for="statusInput">Status</label>
                        <select name="status" class="form-control" id="statusInput">
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                </div>
            </form>



        </div>
    </div>
</div>
@endsection