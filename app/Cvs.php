<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cvs extends Model
{
    protected $table = 'Cvs';

    protected $fillable = [
        'cv_name',
        'bio',
        'user_id',
        'theme_id',
    ];
}
