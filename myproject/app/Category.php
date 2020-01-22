<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function activity(){
        return $this->hasMany('App\Activity');
    }
}
