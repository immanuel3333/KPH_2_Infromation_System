<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiEkonomi2 extends Model
{
    protected $guarded = [];
    protected $table = "potensiekonomi2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kayu', 'nonkayu', 'jasalingkungan', 'bisnis', 'donor'
    ];
}
