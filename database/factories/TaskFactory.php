<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => $faker->numberBetween(0, 1),
        'user_id' => factory(\App\User::class)->create()->id,
    ];
});
