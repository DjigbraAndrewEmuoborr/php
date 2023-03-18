<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id','products','status'
    ];

    protected $casts = [
        'products'=>'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mycart()
    {
        return $this->user()->all()->where('status','current');
    }
}
