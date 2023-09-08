<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefPer extends Model
{
    use HasFactory;
    protected $table ='refernsi_perusahaan';
    // Kolom-kolom yang dapat diisi massal (fillable)

    protected $fillable = [
        'nama',
        'alamat',
        'telepon'
    ];

}

