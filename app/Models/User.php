<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    function Copy(){
        return $this->belongsToMany(Copy::class);
    }
}