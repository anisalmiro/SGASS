<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeemp');
            $table->string('tipo');
            $table->string('email')->nullable($value = true);
            $table->string('nuit', 20)->nullable($value = true);
            $table->string('tel',20)->nullable($value = true);
            $table->string('bairro')->nullable($value = true);
            $table->string('avenida')->nullable($value = true);
            $table->unsignedInteger('distri_id');
            $table->foreign('distri_id')->references('id')->on('distrito');
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
        Schema::dropIfExists('cliente');
    }
}
