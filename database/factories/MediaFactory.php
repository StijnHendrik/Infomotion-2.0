<?php

use Faker\Generator as Faker;

$factory->define(App\Media::class, function (Faker $faker) {
    return [
        'source' => $faker->imageUrl,
        'alt' => $faker->image,
        'post_id' => factory('App\Post')->create()->id,
    ];
});
