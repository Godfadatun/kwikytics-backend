<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'user_id', 'color_1', 'color_2', 'logo_img', 'description', 'facebook', 'twitter', 'linkedin', 'instagram'
    ];
}
