<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable =['name','description','timeopen','timeclose','city','location','price','phone','photo','category_id','user_id'];

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
        return $this->belongsTo('App\User');
    }

}
