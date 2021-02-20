<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post_tag;
use Faker\Generator as Faker;

$factory->define(post_tag::class, function (Faker $faker) {
    return [
        'id_post' => random(1,100),
        'id_tag' => random(1,100),
        'Posts_id' => random(1,100),
        'tags_id' => random(1,100)
    ];
});
