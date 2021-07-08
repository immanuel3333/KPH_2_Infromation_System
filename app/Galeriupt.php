<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriupt extends Model
{
    protected $table = "galeriupt";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal', 'keterangan', 'gambar'
    ];
}
