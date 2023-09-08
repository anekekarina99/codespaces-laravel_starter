<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferensiBahasa extends Model
{
    protected $table = 'refernsi_bahasa'; // Nama tabel dalam database
    protected $fillable = ['kode_bahasa', 'nama_bahasa']; // Kolom yang dapat diisi

    // Tambahan kode atau metode lainnya
}

