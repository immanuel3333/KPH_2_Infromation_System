<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekologi4 extends Model
{
    protected $guarded = [];
    protected $table = "ekologi4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'jenis_tanah', 'jenis_kayu', 'fauna_satwa', 'kelerengan', 'DAS'
    ];
}
