<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalPayment extends Model
{
    protected $table = 'total_payment'; // Nama tabel dalam database
    protected $fillable = ['project_id', 'total_tagihan', 'tanggal_tagihan']; // Kolom yang dapat diisi

    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}

