<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sessions extends Model
{
    public $table ='sessions';
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
