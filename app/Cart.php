<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable=['user_id','category_id','product_id','product_name','user_name','salary'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->belongsTo('App\Products');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
