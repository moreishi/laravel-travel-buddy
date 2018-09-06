<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    public $fillable = ['code','value','user_id'];

    public function user() {
    	return $this->belongsTo('App\User');
    }

}