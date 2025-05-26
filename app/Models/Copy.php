<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{


    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function userCopies()
    {
        return $this->hasMany(UserCopy::class);
    }
}
