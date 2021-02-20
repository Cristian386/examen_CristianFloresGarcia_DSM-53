<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\categories;
use Faker\Generator as Faker;

$factory->define(categories::class, function (Faker $faker) {
    return [
        'name' => $this->faker->sentence,
        'description' => $this->faker->text(45),
        'image' => $this->faker->text(45),
        'Posts_id' => random(1,100)
    ];
});
