<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenawaranJasa extends Model
{
    use HasFactory;

    protected $table = 'penawaran_jasa'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'work_id',
        'project_id',
        'jumlah',
    ];

    // Definisikan kunci asing dan hubungan dengan tabel 'client' dan 'project'
    public function work()
    {
        return $this->belongsTo(Client::class, 'work_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
?>
