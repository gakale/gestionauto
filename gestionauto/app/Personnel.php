<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{


    protected $guarded  = [];


    public function missions()
    {
        return $this->hasMany(Mission::class);
    }


}

