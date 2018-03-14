<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function designation(){
		return $this->belongsTo('App\Designation');
    }
    public function path()
    {
        return '/members/'. $this->id;
    }
    public function avatar()
    {
        return '/storage/'. $this->avatar;
    }
}
