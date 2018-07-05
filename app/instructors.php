<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    public $table = 'instructors';
    protected $hidden = ['photo'];
}
