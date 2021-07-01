<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasFungsi extends Model
{
    protected $guarded = [];
    protected $table = "tugas_fungsi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tugas', 'fungsi'
    ];
}
