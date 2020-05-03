<?php

/** @var Factory $factory */

use App\Priority;
use App\Project;
use App\Task;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->text(128),
        'description' => $faker->text(512),
        'user_id' => App\User::inRandomOrder()->limit(3)->first(),
        'priority_id' => Priority::inRandomOrder()->first(),
        'created_at' => now(),
    ];
});
