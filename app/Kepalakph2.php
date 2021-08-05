<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepalakph2 extends Model
{
    protected $table = "kepalakph2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namakph', 'nip', 'gender', 'telepon', 'email', 'pangkat', 'ujikompetensi', 'diklat','pendidikan','tanggalmulai','tanggalselesai','gambar'
    ];
}
