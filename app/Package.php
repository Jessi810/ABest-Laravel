<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
