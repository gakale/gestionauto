<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{


    protected $fillable = ['name','prenom','email','fonction','telephone'];


    public function missions()
    {
        return $this->hasMany(Mission::class);
    }


}

