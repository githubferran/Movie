<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'primer apellido' => $faker->word,
        'segundo apellido' => $faker->word,
        'slug' => $faker->slug,
        'nacionalidad' => $faker->word,
        'fecha de nacimiento' => $faker->date(),
        'descripcion' => $faker->word,
    ];
});
