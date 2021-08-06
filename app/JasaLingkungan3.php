<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JasaLingkungan3 extends Model
{
    protected $table = "jasalingkungan3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'provinsi', 'jenis_jasa_lingkungan', 'satuan', 'keunggulan', 'lintang', 'bujur', 'pengembangan', 'tahapan', 'periode', 'hasil'
    ];
}
