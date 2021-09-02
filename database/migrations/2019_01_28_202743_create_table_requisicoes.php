<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRequisicoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivelurgenc');
            $table->integer('quantidade');
            $table->string('estado');
            $table->unsignedInteger('stock_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('solec_id');
            $table->foreign('stock_id')->references('id')->on('stock');
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
        Schema::dropIfExists('requisicoes');
    }
}
