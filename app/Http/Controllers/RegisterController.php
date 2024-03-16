<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255', // Menambahkan validasi untuk alamat
            'no' => 'required|string|regex:/^08[0-9]{9,11}$/',
            'sim' => 'required|string|regex:/^36[0-9]{6,}$/',
            'password' => 'required|string|min:8', // Menambahkan validasi untuk kata sandi
        ]);
    
        User::create($validatedData);

        // session()->flash('success', 'Product created successfully');
        // Redirect ke halaman tertentu atau tampilkan respons JSON jika diperlukan
        return redirect('/login')->with('success', 'Product created successfully');
    }
    

 }