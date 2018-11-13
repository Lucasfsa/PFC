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
        Schema::create('chave_de_acessos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_Chave', 45);
            $table->string('observacao', 180);
            // $table->integer('user_id')->unsigned();
            // $table->integer('id_ClienteSoftware')->unsigned();
            // $table->foreign('id_ClienteSoftware')->references('id')->on('cliente_softwares');
            // $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('chave_de_acessos');
    }
}
