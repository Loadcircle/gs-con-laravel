<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'name', 'sub_name','content', 'file', 'position', 'section_id', 'status'
    ];
}
