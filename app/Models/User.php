<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function copies()
    {
        return $this->belongsToMany(Copy::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}

