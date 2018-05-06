<?php

use Faker\Generator as Faker;

$factory->define(App\Hero::class, function (Faker $faker) {
    return [
        'nickname'           => $faker->unique()->name,
        'real_name'          => $faker->firstName . $faker->lastName,
        'origin_description' => $faker->text,
        'superpowers'        => $faker->paragraph,
        'catch_phrase'       => $faker->word,
    ];
});
