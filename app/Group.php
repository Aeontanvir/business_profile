<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function subjects() {
        return $this->hasMany('App\Subject');
    }

    public function path()
    {
        return '/groups/'. $this->id;
    }
}
