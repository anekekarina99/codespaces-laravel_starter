<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeWork extends Model
{
    protected $table = 'type_work'; // Nama tabel dalam database
    protected $fillable = ['name_type']; // Kolom yang dapat diisi
}
?>
