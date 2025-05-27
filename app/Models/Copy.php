<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    public function User()
    {
        return $this->belongsToMany(User::class);
    }

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }
}
