<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence,
        'slug' => $this->faker->slug,
        'descripcion' => $this->faker->text(45),
        'image' => $this->faker->imageUrl(1280,720),
        'id_tag' => random(1,100),
        'id_user' => random(1,100),
        'category_id' => random(1,100),
        'extract' => $this->faker->text(45),
        'user_id' => random(1,100)
    ];
});
