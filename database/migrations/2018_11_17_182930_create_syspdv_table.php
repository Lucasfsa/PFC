<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyspdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syspdv', function (Blueprint $table) {
            $table->integer('cliente_software_id')->unsigned();
            $table->foreign('cliente_software_id')->references('id')->on('cliente_software');
            $table->integer('controle');
            $table->integer('versao');
            $table->integer('serie');
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
        Schema::dropIfExists('syspdv');
    }
}
