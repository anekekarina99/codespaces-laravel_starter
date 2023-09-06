<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananPembelian extends Model
{
    use HasFactory;

    protected $table = 'pesanan_pembelian'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'client_id',
        'tanggal_pesanan',
        'nomor_pesanan',
    ];

    // Definisikan kunci asing dan hubungan dengan tabel 'client'
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
