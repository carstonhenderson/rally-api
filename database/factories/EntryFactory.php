<?php

use App\User;
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
        'user_id' => factory(User::class)->create(),
        'mood' => $faker->randomElement($moods),
        'notes' => $faker->paragraph
    ];
});
