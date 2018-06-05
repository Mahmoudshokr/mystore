<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable=['user_id','category_id','photo_id','name','salary'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function photo(){
//        return $this->belongsTo('App\Photo');
        return $this->belongsTo('App\Photo');
    }
}
