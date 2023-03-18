<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transanction extends Model
{
    protected $fillable = [
        'user_id','payload'
    ];
}
