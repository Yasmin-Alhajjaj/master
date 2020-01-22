<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable =['name','description','location','price','photo','time','number','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsT('App\User');
    }

}
