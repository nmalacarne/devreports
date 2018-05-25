<?php

use Faker\Generator as Faker;

$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'progress' => $faker->paragraph,
        'todos' => $faker->paragraph,
        'comments' => $faker->paragraph,
    ];
});
