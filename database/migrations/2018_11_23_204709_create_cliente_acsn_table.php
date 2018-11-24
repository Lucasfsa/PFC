<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteAcsnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_acsn', function (Blueprint $table) {
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('acsn_id')->unsigned();
            $table->foreign('acsn_id')->references('id')->on('acsn');
            $table->integer('chave_id')->unsigned()->nullable();
            $table->foreign('chave_id')->references('id')->on('chaves');
            $table->primary(['cliente_id', 'acsn_id']);
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
        Schema::dropIfExists('cliente_acsn');
    }
}
