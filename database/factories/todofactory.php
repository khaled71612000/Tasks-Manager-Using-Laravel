<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

// name of model or app/todo::class
$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'name' => $faker-> sentence(3),
        'description' => $faker->paragraph(4),
        'completed' => false
    ];
});
