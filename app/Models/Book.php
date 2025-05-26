<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function copies()
    {
        return $this->hasMany(Copy::class);
    }
}



