<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonStudenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_studen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nombre');
            $table->string('cedula');
            $table->string('direccion');
            $table->string('telefono');

            $table->string('codigo');
            $table->string('tarifa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_studen');
    }
}
