<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
<<<<<<< HEAD


    protected $fillable = ['name','prenom','email','fonction','telephone'];


=======
    protected $fillable = ['name','prenom','email','fonction','telephone'];
>>>>>>> 3dbb915d2e6ac96d2232f6c3802d1e6460f25943
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }
<<<<<<< HEAD


=======
>>>>>>> 3dbb915d2e6ac96d2232f6c3802d1e6460f25943
}

