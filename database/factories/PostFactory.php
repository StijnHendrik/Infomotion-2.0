<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'title' => $faker->sentence(),
        'text' => $faker->sentence(),
        'type_id' => factory('App\Post_type')->create()->id,
        'start_position_x' => $faker->numberBetween($min = 1, $max = 5),
        'end_position_x' => $faker->numberBetween($min = 1, $max = 5),
        'start_position_y' => $faker->numberBetween($min = 1, $max = 5),
        'end_position_y' => $faker->numberBetween($min = 1, $max = 5),
        'published' => '1',
    ];
});
