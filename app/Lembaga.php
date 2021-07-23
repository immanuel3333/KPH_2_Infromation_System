<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $table = "lembaga";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'unit', 'provinsi', 'jenislembaga', 'kepseksi', 'petugaskph', 'teleponpetugas', 'emailpetugas', 'sklembaga', 'tglsklembaga', 'doksklembaga', 'statblud', 'skblud', 'dokskblud'
    ];
}
