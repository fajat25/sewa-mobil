<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobil;

class ManajemenController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('manajemen.index', compact('mobils'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merek' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'nomor_plat' => 'required|string|max:20',
            'tarif_per_hari' => 'required|numeric|min:0',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
            'status' => 'required|in:0,1', // Memastikan status hanya bernilai 0 atau 1
        ]);
        

        // dd('berhasil');
        Mobil::create($validatedData);

        return redirect('/manajemen')->with('success', 'Mobil berhasil ditambahkan.');
    }
}