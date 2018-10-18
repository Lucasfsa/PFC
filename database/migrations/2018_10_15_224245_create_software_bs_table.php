<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareBsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_bs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ClienteSoftware')->unsigned();
            $table->integer('contrato');
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
        Schema::dropIfExists('software_bs');
    }
}
