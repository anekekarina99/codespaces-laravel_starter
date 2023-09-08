<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanJasa extends Model
{
    use HasFactory;

    protected $table = 'permintaan_jasa'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'nama_pelanggan',
        'jenis_jasa',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_biaya',
    ];

    // Tambahkan metode atau relasi lain yang diperlukan di sini
}

