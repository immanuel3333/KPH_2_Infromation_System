<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga3 extends Model
{
    protected $table = "lembaga3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'unit', 'provinsi', 'jenislembaga', 'kepseksi', 'petugaskph', 'teleponpetugas', 'emailpetugas', 'sklembaga', 'tglsklembaga', 'doksklembaga', 'statblud', 'skblud', 'dokskblud'
    ];
}
