<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rphjp3 extends Model
{
    protected $table = "rphjp3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'upaya', 'kendala', 'progres'
    ];
}
