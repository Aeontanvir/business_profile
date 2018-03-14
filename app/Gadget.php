<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    public function path()
    {
        return '/gadgets/'. $this->id;
    }
}
