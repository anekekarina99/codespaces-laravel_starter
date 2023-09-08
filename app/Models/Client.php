<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
    ];

    // Tambahkan metode atau relasi lain yang diperlukan di sini
}
