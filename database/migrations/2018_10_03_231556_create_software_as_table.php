<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_as', function (Blueprint $table) {
            $table->integer('id_ClienteSoftware')->unsigned();
            $table->integer('rede', 3);
            $table->string('senha', 15);
            $table->string('codigo', 45);
            $table->foreign('id_ClienteSoftware')->references('id')->on('cliente__softwares');
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
        Schema::dropIfExists('software_as');
    }
}
