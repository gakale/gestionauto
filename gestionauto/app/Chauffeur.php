<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
  protected $guarded  = [];

    public function missions()
    {
        return $this->belongsTo(Mission::class);
    }
}
