<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    public function path()
    {
        return '/recommendations/'. $this->id;
    }
}
