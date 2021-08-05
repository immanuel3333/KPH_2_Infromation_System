<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiEkonomi4 extends Model
{
    protected $guarded = [];
    protected $table = "potensiekonomi4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kayu', 'nonkayu', 'jasalingkungan', 'bisnis', 'donor'
    ];
}
