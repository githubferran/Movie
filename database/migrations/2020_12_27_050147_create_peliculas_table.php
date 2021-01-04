<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained()->cascadeOnDelete();
            $table->string('director');
            $table->string('titulo');
            $table->longbolb('portada')->nullable();
            $table->string('trailer');
            $table->string('slug')->unique()->default('');
            $table->longText('descripcion');
            $table->integer('valoracion');
            $table->date('año');
            $table->boolean('aracteristicas')->default(0);
            $table->string('softDelete');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
