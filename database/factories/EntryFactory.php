<?php

use Faker\Generator as Faker;

$factory->define(App\Entry::class, function (Faker $faker) {
    $moods = [
        'great',
        'good',
        'fine',
        'bad',
        'terrible'
    ];

    return [
        'mood' => $faker->randomElement($moods),
        'notes' => $faker->paragraph
    ];
});
