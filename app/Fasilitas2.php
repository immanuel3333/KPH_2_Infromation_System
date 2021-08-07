<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas2 extends Model
{
    protected $table = "fasilitas2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'aspek', 'jumlah', 'kondisi', 'status', 'sumberdana'
    ];
}
