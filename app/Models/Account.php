<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'profile_picture', 'phone','profession', 'gender', 'acct_name', 'acct_type', 'acct_no', 'bank_name', 'city', 'address', 'state', 'country', 'skip_id', 'id_submitted', 'id_front', 'id_back',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
