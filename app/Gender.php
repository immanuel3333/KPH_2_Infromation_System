<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "gender";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'gender'
    ];
}
