<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogSolicitacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_solicitacao', function (Blueprint $table) {
            $table->increments('id_logsol');
            $table->string('descricao',300);
            $table->string('estado');
            $table->string('seccaoAvariada',500);
            $table->string('descSolucao',500);
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
        Schema::dropIfExists('log_solicitacao');
    }
}
