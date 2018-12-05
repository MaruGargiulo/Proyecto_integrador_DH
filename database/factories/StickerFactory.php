<?php

use Faker\Generator as Faker;

$factory->define(App\Sticker::class, function (Faker $faker) {
    return [
        'album_name' => $faker->name,
        'sticker_number' => $faker->numberBetween(1,2),
        'description' => $faker->text,
        'user_id' => $faker->numberBetween(1, 20),
        'category_id' => $faker->numberBetween(1, 10)
    ];
});
