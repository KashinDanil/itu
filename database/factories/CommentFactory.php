<?php

/** @var Factory $factory */

use App\Comment;
use App\Task;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->realText(512),
        'user_id' => User::inRandomOrder()->limit(3)->first(),
        'created_at' => now(),
    ];
});
