<?php

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'complete'=>$faker->boolean()
    ];
});
