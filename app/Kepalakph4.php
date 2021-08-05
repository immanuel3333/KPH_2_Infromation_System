<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepalakph4 extends Model
{
    protected $table = "kepalakph4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namakph', 'nip', 'gender', 'telepon', 'email', 'pangkat', 'ujikompetensi', 'diklat','pendidikan','tanggalmulai','tanggalselesai','gambar'
    ];
}
