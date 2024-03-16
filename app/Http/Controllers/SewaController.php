<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Carbon\Carbon;
use App\Models\Mobil;
use App\Http\Requests\StoreSewaRequest;
use App\Http\Requests\UpdateSewaRequest;
use Illuminate\Http\Request;


class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobils = Mobil::all();
        return view('sewa.index', compact('mobils'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mobil_id' => 'required', // Pastikan mobil_id valid dan ada di tabel mobil
            'user_id' => 'required', // Pastikan mobil_id valid dan ada di tabel mobil
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_hari' => 'required',
            'total_bayar' => 'required', // Tanggal selesai harus setelah tanggal mulai
        ]);
        // Ambil ID pengguna yang sedang login
        // $user_id = auth()->user()->id;
    
        // // Hitung jumlah hari berdasarkan tanggal mulai dan tanggal selesai
        // $tanggal_mulai = Carbon::createFromFormat('Y-m-d', $validatedData['tanggal_mulai']);
        // $tanggal_selesai = Carbon::createFromFormat('Y-m-d', $validatedData['tanggal_selesai']);
        // $jumlah_hari = $tanggal_mulai->diffInDays($tanggal_selesai);
    
        // // Hitung total bayar berdasarkan jumlah hari dan tarif per hari mobil
        // $mobil = Mobil::findOrFail($validatedData['mobil_id']);
        // $total_bayar = $jumlah_hari * $mobil->tarif_per_hari;
    
        // // Buat instance Sewa dan isi dengan data yang diterima dari permintaan
        // $sewa = new Sewa();
        // $sewa->mobil_id = $validatedData['mobil_id'];
        // $sewa->user_id = $user_id;
        // $sewa->tanggal_mulai = $tanggal_mulai;
        // $sewa->tanggal_selesai = $tanggal_selesai;
        // $sewa->jumlah_hari = $jumlah_hari;
        // $sewa->total_bayar = $total_bayar;
    
        // // Simpan data sewa ke dalam database
        // $sewa->save();
        Sewa::create($validatedData);
    
        // Redirect ke halaman tertentu atau kembali ke halaman sebelumnya
        return redirect('/mobil')->with('success', 'Sewa berhasil ditambahkan.');
    }
}