<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $table = "identitas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'unit', 'kategori', 'tahun', 'provinsi', 'nickname', 'alias', 'organisasi', 'jeniskph', 'alamat','aksesibilitas','email', 'telepon', 'longitude','latitude'
    ];
}
