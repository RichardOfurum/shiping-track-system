<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function locations(){
        return $this->hasMany(Location::class);
    }
    
}
