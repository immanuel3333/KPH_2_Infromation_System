<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas3 extends Model
{
    protected $table = "fasilitas3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'aspek', 'jumlah', 'kondisi', 'status', 'sumberdana'
    ];
}
