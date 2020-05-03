<?php

/** @var Factory $factory */

use App\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Project::class, function (Faker $faker) {
    $projectName = $faker->company . ' ' . $faker->companySuffix;
    return [
        'name' => $projectName,
        'slug' => Str::slug($projectName),
        'description' => $faker->text(255),
        'customer_contacts' => $faker->address,
        'created_at' => now(),
    ];
});
