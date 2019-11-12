<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    //

    protected $fillable = ['name','prenom','fonction','adresse','telephone','email','cni','permis','typepermis','date'];
    public function missions()
    {
        return $this->belongsTo(Mission::class);
    }
}
