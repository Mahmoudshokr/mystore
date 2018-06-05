<?php

use App\Category;
use App\Photo;
use App\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Products::class,100)->create();
//        factory(Photo::class,100)->create();
 //       factory(Category::class,10)->create();
    }
}
