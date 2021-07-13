<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiEkonomi1 extends Model
{
    protected $guarded = [];
    protected $table = "potensiekonomi1";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kayu', 'nonkayu', 'jasalingkungan', 'bisnis', 'donor'
    ];
}
