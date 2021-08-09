<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriunitkerja4 extends Model
{
    protected $table = "galeriunitkerja4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'keterangan', 'gambar'
    ];
}
