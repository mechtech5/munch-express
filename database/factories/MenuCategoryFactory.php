<?php

use Faker\Generator as Faker;

$factory->define(App\Models\MenuCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'resto_id' => 1
        
    ];
});
