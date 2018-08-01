<?php

use Faker\Generator as Faker;

$factory->define(App\Post_type::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
    ];
});
