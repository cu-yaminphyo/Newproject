<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newlinks extends Model
{
    protected $fillable = [
        'cid',
        'moviename',
        'link',
        'imagename',
        'name',
    ]; 

public  function  user(){
    return $this->belongsTo('App\User');
}
}