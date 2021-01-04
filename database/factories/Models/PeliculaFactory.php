<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pelicula;
use Faker\Generator as Faker;

$factory->define(Pelicula::class, function (Faker $faker) {
    return [
        'categoria_id' => factory(\App\Models\Categorium::class),
        'director' => $faker->word,
        'titulo' => $faker->word,
        'portada' => $faker->word,
        'slug' => $faker->slug,
        'descripcion' => $faker->text,
        'valoracion' => $faker->numberBetween(-10000, 10000),
        'año' => $faker->date(),
        'aracteristicas' => $faker->boolean,
        'softDelete' => $faker->word,
    ];
});
