<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rphjp4 extends Model
{
    protected $table = "rphjp4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'upaya', 'kendala', 'progres'
    ];
}
