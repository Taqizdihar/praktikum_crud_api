<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void {
        Schema::create( 'produk_makanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('gambar_produk')->nullable();
            $table->date('tgl_pembuatan');
            $table->date('tgl_kadaluarsa');
            $table->string('kategori_produk');
            $table->string('nama_mitra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
