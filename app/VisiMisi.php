<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $table = "visimisi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'visi', 'misi'
    ];
}
