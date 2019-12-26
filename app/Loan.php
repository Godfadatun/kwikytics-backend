<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = [
        'user_id', 'loaner_id', 'start_date', 'end_date', 'amount', 'interest', 'fine'
    ];
}
