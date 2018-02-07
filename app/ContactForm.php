<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'subject',
        'message'
    ];
}
