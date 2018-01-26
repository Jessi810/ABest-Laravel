<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Transport;

class Image extends Model
{
    protected $fillable = [
        'transport_id',
        'filename'
    ];

    public function transports()
    {
        return $this->belongsTo(Transport::class);
    }
}
