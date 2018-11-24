<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteEcleticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_ecletica', function (Blueprint $table) {
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('ecletica_id')->unsigned();
            $table->foreign('ecletica_id')->references('id')->on('ecletica');
            $table->integer('chave_id')->unsigned();
            $table->foreign('chave_id')->references('id')->on('chaves');
            $table->primary(['cliente_id', 'ecletica_id']);
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
        Schema::dropIfExists('cliente_ecletica');
    }
}
