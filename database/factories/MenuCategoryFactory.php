<?php

use Faker\Generator as Faker;

$factory->define(App\Models\MenuCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'resto_id' => 1  
    ];
});
