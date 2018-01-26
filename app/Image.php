<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Transport;

class Image extends Model
{
    public function transports()
    {
        return $this->belongsTo(Transport::class);
    }
}
