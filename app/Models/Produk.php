<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model {

    protected $table = 'produk_makanans';

    protected $fillable = [
        'nama_produk',
        'gambar_produk',
        'tgl_pembuatan',
        'tgl_kadaluarsa',
        'kategori_produk',
        'nama_mitra',
    ];
}
