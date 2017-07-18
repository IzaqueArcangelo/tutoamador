<?php

use App\Model\Login;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->increments('id');
            // TODO SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
            //$table->string('nomeUsuario', '191')->unique();
            $table->string('nomeUsuario')->unique();
            $table->string('email')->unique();
            $table->string('senha');
            $table->dateTime('dataCadastro');
            $table->dateTime('dataAtualizacao')->nullable();
            $table->rememberToken();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
}
