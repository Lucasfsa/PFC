<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente__softwares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Cliente')->unsigned();
            $table->integer('id_Software')->unsigned();
            $table->foreign('id_Cliente')->references('id')->on('clientes');
            $table->foreign('id_Software')->references('id')->on('software');
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
        Schema::dropIfExists('cliente__softwares');
    }
}