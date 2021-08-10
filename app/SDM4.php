<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SDM4 extends Model
{
    protected $guarded = [];
    protected $table = "sdm4";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kkph', 'kepala_seksi', 'tata_usaha', 'kepala_resort', 'staf_pns', 'staf_honorer', 'tenaga_kontrak', 'tenaga_brigdalkarhutlapns', 'tenaga_brigdalkarhutlanonpns', 'pamhut' ,'sdm_pemda', 'bukti_rimbawa_sebelum_2015', 'bakti_rimbawa_2015', 'bakti_rimbawa_2016', 'bakti_rimbawa_2017', 'bakti_rimbawa_2018', 'total_bakti_rimbawan'
    ];
}
