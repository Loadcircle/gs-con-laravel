<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section_type extends Model
{
    protected $fillable = [
        'name', 'file', 'status'
    ];
}
