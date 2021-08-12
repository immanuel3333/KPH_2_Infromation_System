<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan3 extends Model
{
    protected $guarded = [];
    protected $table = "pendidikan3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'dibawah_sma', 'sma', 'd3', 's1', 's2', 's3', 'total', 'management', 'teknis', 'lainnya'
    ];
}
