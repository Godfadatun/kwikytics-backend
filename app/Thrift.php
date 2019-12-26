<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thrift extends Model
{
    //
    protected $fillable = [
        'user_id', 'thrift_name', 'description', 'duration', 'amount', 'interval'
    ];
}
