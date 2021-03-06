<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    protected $with = ['genres'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class)->withTimestamps();
    }

}
