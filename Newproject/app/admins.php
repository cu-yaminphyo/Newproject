<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $fillable = [
       
        'name',
        'password',
    ];
}
