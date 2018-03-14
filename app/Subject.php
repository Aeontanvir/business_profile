<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    public function group()
    {
		return $this->belongsTo('App\Group');
    }

    public function courses(){
		return $this->hasMany('App\Course');
    }
    
    public function path()
    {
        return '/subjects/'. $this->id;
    }
}
