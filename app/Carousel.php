<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{    
    protected $fillable = [
        'file', 'tittle', 'position', 'status'
    ];
}
