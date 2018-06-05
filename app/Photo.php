<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable=['size','path','product_id'];

    public function product(){
        return $this->belongsTo('App\Products');
    }
}
