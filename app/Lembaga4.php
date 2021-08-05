<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga4 extends Model
{
    protected $table = "lembaga4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'unit', 'provinsi', 'jenislembaga', 'kepseksi', 'petugaskph', 'teleponpetugas', 'emailpetugas', 'sklembaga', 'tglsklembaga', 'doksklembaga', 'statblud', 'skblud', 'dokskblud'
    ];
}
