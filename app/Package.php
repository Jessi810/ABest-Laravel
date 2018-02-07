<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'size',
        'price_1',
        'price_2'
    ];

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }

    public function bookings()
    {
       return $this->hasMany(Booking::class);
    }
}
