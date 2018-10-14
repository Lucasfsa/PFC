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
            $table->integer('controle', 7);
            $table->integer('versao');
            $table->integer('serie');
            $table->integer('id_ClienteSoftware')->unsigned();
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
        Schema::dropIfExists('software_bs');
    }
}

