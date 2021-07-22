<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriunitkerja extends Model
{
    protected $table = "galeriunitkerja";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'keterangan', 'gambar'
    ];
}
