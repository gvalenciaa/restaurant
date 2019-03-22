<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_provider', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nombre');
            $table->string('cedula');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('id_proveedor');

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
        Schema::dropIfExists('person_provider');
    }
}
