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
            $table->integer('id_ClienteSoftware')->unsigned();
            $table->integer('contrato', 5);
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
