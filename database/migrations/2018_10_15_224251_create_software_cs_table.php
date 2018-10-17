<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_cs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ClienteSoftware')->unsigned();
            $table->integer('codigo_rede');
            $table->string('codigo_loja');
            $table->foreign('id_ClienteSoftware')->references('id')->on('cliente_softwares');
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
        Schema::dropIfExists('software_cs');
    }
}
