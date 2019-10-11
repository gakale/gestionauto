<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }
    }

