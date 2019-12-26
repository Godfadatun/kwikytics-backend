<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'user_id', 'service_id', 'description', 'transaction_type', 'amount', 'previous_balance', 'current_balance', 'service_charge'
    ];
}
