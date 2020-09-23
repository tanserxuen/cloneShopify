<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'price', 'quantity', 'rate'
    ];

}
