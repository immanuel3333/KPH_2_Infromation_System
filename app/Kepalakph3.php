<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepalakph3 extends Model
{
    protected $table = "kepalakph3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namakph', 'nip', 'gender', 'telepon', 'email', 'pangkat', 'ujikompetensi', 'diklat','pendidikan','tanggalmulai','tanggalselesai','gambar'
    ];
}
