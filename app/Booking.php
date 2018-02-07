<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'date_inquired'
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
