<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('codigoTutorial');
            $table->float('valor')->nullable();
            $table->longText('postagem');
            $table->integer('id_tipo')->unsigned();
            $table->integer('id_autor')->unsigned();
            $table->foreign('id_tipo')->references('id')->on('tipos');
            $table->foreign('id_autor')->references('id')->on('professors');
            $table->dateTime('dataPublicacao');
            $table->dateTime('dataAtualizacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorials');
    }
}
