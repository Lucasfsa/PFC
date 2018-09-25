<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rz_social');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cnpj');
            $table->String('telefone');
            $table->rememberToken();
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
        Schema::dropIfExists('clientes');
    }
}
