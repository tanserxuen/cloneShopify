<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loginn extends Model
{
    protected $table = 'loginn';
    
    protected $fillable = [
        'username', 'email'
    ];

    protected $hidden = [
        'password'
    ];
}
