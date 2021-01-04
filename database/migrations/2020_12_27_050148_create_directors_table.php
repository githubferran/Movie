<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('primer apellido');
            $table->string('segundo apellido');
            $table->string('slug')->unique();
            $table->string('nacionalidad');
            $table->date('fecha de nacimiento');
            $table->string('descripcion');
            $table->softDeletes();
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
        Schema::dropIfExists('directors');
    }
}
