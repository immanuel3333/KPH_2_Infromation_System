<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rphjp2 extends Model
{
    protected $table = "rphjp2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'upaya', 'kendala', 'progres'
    ];
}
