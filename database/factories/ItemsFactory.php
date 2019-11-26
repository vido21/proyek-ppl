<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Items;
use Faker\Generator as Faker;

$factory->define(Items::class, function (Faker $faker) {

    return [
        'title' => $faker->name,
        'seller' => $faker->name,
        'description'=> $faker->text(200),
        'price' => mt_rand(100, 500),
        'stock'=> mt_rand(100, 200),
    ];
});
