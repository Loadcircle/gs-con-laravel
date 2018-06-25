<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'ip', 'name', 'lastname', 'phone', 'email', 'send_to', 'message', 'status'
    ];
}
