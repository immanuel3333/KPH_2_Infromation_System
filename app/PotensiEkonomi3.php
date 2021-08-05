<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiEkonomi3 extends Model
{
    protected $guarded = [];
    protected $table = "potensiekonomi3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kayu', 'nonkayu', 'jasalingkungan', 'bisnis', 'donor'
    ];
}
