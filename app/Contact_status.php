<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_status extends Model
{
    protected $table = 'contact_status';

    protected $fillable = [
        'name', 'status'
    ];
}
