<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function gadgets() 
    {
        return $this->hasMany('App\Gadget');
    }
    public function path()
    {
        return '/services/'. $this->id;
    }
}
