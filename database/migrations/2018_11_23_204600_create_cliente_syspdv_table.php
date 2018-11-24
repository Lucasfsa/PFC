<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteSyspdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_syspdv', function (Blueprint $table) {
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('syspdv_id')->unsigned();
            $table->foreign('syspdv_id')->references('id')->on('syspdv');
            $table->integer('chave_id')->unsigned()->nullable();
            $table->foreign('chave_id')->references('id')->on('chaves');
            $table->primary(['cliente_id', 'syspdv_id']);
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
        Schema::dropIfExists('cliente_syspdv');
    }
}
