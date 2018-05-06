<?php

use Faker\Generator as Faker;

$factory->define(App\HeroImage::class, function (Faker $faker) {
    $hero = factory('App\Hero')->create();

    return [
        'title'   => $hero->nickname,
        'src'     => $faker->imageUrl,
        'main'    => 0,
        'hero_id' => $hero->id,
    ];
});
