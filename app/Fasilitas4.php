<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas4 extends Model
{
    protected $table = "fasilitas4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'aspek', 'jumlah', 'kondisi', 'status', 'sumberdana'
    ];
}
