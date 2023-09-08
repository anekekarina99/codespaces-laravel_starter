<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivaOrder extends Model
{
    use HasFactory;

    protected $table = 'activa_order'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'tagihan_id',
        'jumlah_pembayaran',
        'tanggal_pemb',
    ];

    // Definisikan kunci asing dan hubungan dengan tabel 'total_payment'
    public function totalPayment()
    {
        return $this->belongsTo(TotalPayment::class, 'tagihan_id', 'id');
    }
}
?>
