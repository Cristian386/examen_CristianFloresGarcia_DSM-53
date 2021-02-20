<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\images;
use Faker\Generator as Faker;

$factory->define(images::class, function (Faker $faker) {
    return [
        'url' => $this->faker->image_url,
        'imageable_id' => random(1,100),
        'imageable_type' => random(1,100)
    ];
});
