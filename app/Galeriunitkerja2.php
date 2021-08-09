<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriunitkerja2 extends Model
{
    protected $table = "galeriunitkerja2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'keterangan', 'gambar'
    ];
}
