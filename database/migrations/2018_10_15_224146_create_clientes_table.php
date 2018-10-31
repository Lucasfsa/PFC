<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_fantasia')->nullable();
            $table->string('rz_social');
            $table->string('cnpj', 18)->nullable();
            $table->string('segmento_mercado')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone', 14)->nullable();
            $table->integer('id_funcionario')->unsigned()->nullable();
            $table->text('observacao')->nullable();
            $table->foreign('id_funcionario')->references('id')->on('users');
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
        Schema::dropIfExists('clientes');
    }
}
