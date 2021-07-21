<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rphjp extends Model
{
    protected $table = "rphjp";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'upaya', 'kendala', 'progres'
    ];
}
