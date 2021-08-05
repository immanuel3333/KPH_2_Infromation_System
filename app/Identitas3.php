<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas3 extends Model
{
    protected $table = "identitas3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'unit', 'kategori', 'tahun', 'provinsi', 'nickname', 'alias', 'organisasi', 'jeniskph', 'alamat','aksesibilitas','email', 'telepon', 'longitude','latitude'
    ];
}
