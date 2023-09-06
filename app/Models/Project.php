<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'client_id_project',
        'telepon',
    ];

    // Definisikan kunci asing dan hubungan dengan tabel 'client'
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id_project', 'id');
    }
}
