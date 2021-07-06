<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $guarded = [];
    protected $table = "sejarah";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'sejarah', 'gambar'
    ];
}
