<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name', 'slug', 'section_types_id', 'position', 'status'
    ];
}
