<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas2 extends Model
{
    protected $table = "identitas2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'unit', 'kategori', 'tahun', 'provinsi', 'nickname', 'alias', 'organisasi', 'jeniskph', 'alamat','aksesibilitas','email', 'telepon', 'longitude','latitude'
    ];
}
