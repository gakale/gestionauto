<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    //


    public function missions()
    {
        return $this->belongsTo(Mission::class);
    }
}
