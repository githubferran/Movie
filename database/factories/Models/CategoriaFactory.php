<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'parent_id' => factory(\App\Models\Parent::class),
        'lft' => $faker->randomNumber(),
        'rgt' => $faker->randomNumber(),
        'depth' => $faker->randomNumber(),
        'nombre' => $faker->word,
        'slug' => $faker->slug,
        'descripcion' => $faker->word,
    ];
});
