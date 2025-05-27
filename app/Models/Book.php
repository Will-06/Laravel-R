<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     function Author(){
        return $this->belongsToMany(Author::class);
    }

    function Copy(){
        return $this->hasOne(Copy::class);
    }

}