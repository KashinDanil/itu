<?php

/** @var Factory $factory */

use App\Action;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Action::class, function (Faker $faker) {
    return [
        'action' => $faker->realText(255),
        'user_id' => User::inRandomOrder()->limit(3)->first(),
        'created_at' => now(),
    ];
});
