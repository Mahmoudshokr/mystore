<?php

use App\Category;
use App\Photo;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        //
        'user_id'=>function(){
         return User::all()->random();
        },
        'category_id'=>function(){
         return Category::all()->random();
        },
        'photo_id'=>function(){
         return Photo::all()->random();
        },
        'name'=>$faker->word,
        'salary'=>$faker->numberBetween(15,10000),
    ];
});
