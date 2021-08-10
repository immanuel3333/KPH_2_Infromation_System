<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $guarded = [];
    protected $table = "artikel";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'judul', 'gambar', 'artikel'
    ];
}