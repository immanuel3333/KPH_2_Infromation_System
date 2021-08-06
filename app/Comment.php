<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    protected $table = "comments";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'username', 'comment'
    ];
}
