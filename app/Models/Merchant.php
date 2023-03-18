<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Subscriptions\Traits\HasSubscriptions;

class Merchant extends Model
{
    use HasSubscriptions;

    protected $fillable = [
        'user_id', 'biz_name', 'biz_username', 'biz_type', 'biz_description', 'alt_phone_1', 'alt_phone_2', 'biz_avatar', 'biz_address', 'lga', 'city', 'state', 'country', 'acct_no', 'acct_name', 'acct_type', 'bank_name', 'status'
    ];

    public function isActive()
    {
        if ($this->status == 'approved') {
            return true;
        }
        return false;
    }

    public function muser()
    {
        return $this->belongsTo(User::class);
    }
}
