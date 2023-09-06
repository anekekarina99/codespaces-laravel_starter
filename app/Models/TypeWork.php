<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeWork extends Model
{
    use HasFactory;
    protected $table ='users_fix';
    // Kolom-kolom yang dapat diisi massal (fillable)

    protected $fillable = [
        'name',
        'email',
    ];

}
