<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'work'; // Nama tabel dalam database
    protected $fillable = ['name_work']; // Kolom yang dapat diisi
}
?>
