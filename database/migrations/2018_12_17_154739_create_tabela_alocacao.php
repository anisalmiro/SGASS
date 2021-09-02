<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaAlocacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descAvaria');
            $table->string('estado');
            $table->string('nivelUrgenc');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('solec_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('solec_id')->references('id')->on('solecitacao');
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
        Schema::dropIfExists('alocacao');
    }
}
