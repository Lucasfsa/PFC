<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaveDeAcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chave_de__acessos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Funcionario')->unsigned();
            $table->string('numero_Chave', 45);
            $table->foreign('id_Funcionario')->references('id')->on('users');
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
        Schema::dropIfExists('chave_de__acessos');
    }
}

