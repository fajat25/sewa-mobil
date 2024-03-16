<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mobil_id')->constrained('mobils'); // Menambahkan kolom foreign key untuk menghubungkan dengan tabel mobils
            $table->foreignId('user_id')->constrained('users'); // Menambahkan kolom foreign key untuk menghubungkan dengan tabel users
            $table->dateTime('tanggal_sewa');
            $table->dateTime('tanggal_kembali');
            $table->integer('jumlah_hari');
            $table->decimal('total_bayar', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};