<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = "peraturan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'judul', 'keterangan', 'file'
    ];
}
