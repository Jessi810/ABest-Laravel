<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
