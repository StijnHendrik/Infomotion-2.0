<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'title' => $faker->sentence(),
        'text' => $faker->sentence(),
        'type_id' => factory('App\Post_type')->create()->id,
        'position_x' => $faker->randomDigitNotNull,
        'position_y' => $faker->randomDigitNotNull,
        'published' => '1',
    ];
});
