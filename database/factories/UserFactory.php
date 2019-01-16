<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'zuozhe' => $faker->sentence(3),
        'content' => $faker->text(500), // secret
        'fenlei_id' => rand(1,10),
        'news_pic' =>$faker->imageUrl(),
        'dianji' => rand(100,1000),
        'created_at'=>$faker->dateTimeThisMonth(),
        'updated_at'=>$faker->dateTimeThisMonth(),
    ];
});
