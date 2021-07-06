<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Struktur extends Model
{


    //
    protected $guarded = [];
    protected $table = "strukturs";
    protected $primaryKey = "id";
    protected $fillable = [
        'image', 'image2'
    ];
}
