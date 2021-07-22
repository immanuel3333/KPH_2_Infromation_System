<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NKK extends Model
{
    protected $table = "nkk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_kelompok', 'lokasi', 'luas' ,'jumlah_kk', 'fungsi_kawasan' , 'jenis_kerjasama', 'nomor_nkk', 'nomor_kulin', 'jumlah_disadap', 'jumlah_dievaluasi',
    ];
}
