<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThriftSubscription extends Model
{
    //
    protected $fillable = [
        'user_id', 'thrift_id', 'start_date', 'end_date'
    ];
}
