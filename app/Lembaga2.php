<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga2 extends Model
{
    protected $table = "lembaga2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'unit', 'provinsi', 'jenislembaga', 'kepseksi', 'petugaskph', 'teleponpetugas', 'emailpetugas', 'sklembaga', 'tglsklembaga', 'doksklembaga', 'statblud', 'skblud', 'dokskblud'
    ];
}
