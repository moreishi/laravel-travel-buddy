<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    
	public $fillable = ['updated_at','user_id','visitor_id'];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function visitor() {
    	return $this->belongsTo('App\User','visitor_id','id');
    }

}