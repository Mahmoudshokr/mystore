<?php

use App\Products;
use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        //
        'size'=>$faker->numberBetween(10,10000),
        'path'=>$faker->image('/images'),
        'products_id'=>function(){
            return Products::all()->random();
        },
    ];
});
