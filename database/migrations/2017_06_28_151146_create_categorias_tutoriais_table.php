<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTutoriaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_tutoriais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tutorial')->unsigned();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_tutorial')->references('id')->on('tutorials');
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_tutoriais');
    }
}
