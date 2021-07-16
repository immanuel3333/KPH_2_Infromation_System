<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekologi extends Model
{
    protected $guarded = [];
    protected $table = "ekologi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'jenis_tanah', 'jenis_kayu', 'fauna_satwa', 'kelerengan', 'DAS'
    ];
}
