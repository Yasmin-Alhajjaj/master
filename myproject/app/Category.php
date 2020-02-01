<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable =['name','description','photo'];

    public function activity(){
        return $this->hasMany('App\Activity');
    }
}
