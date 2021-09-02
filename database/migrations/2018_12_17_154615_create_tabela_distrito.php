<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaDistrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distrito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomedt');
            $table->unsignedInteger('prov_id');
            $table->foreign('prov_id')->references('id')->on('provincia');
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
        Schema::dropIfExists('distrito');
    }
}
