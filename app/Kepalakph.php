<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepalakph extends Model
{
    protected $table = "kepalakph";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namakph', 'nip', 'gender', 'telepon', 'email', 'pangkat', 'ujikompetensi', 'diklat','pendidikan','tanggalmulai','tanggalselesai','gambar'
    ];
}
