<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotacaoSolic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotacao_solic', function (Blueprint $table) {
            $table->increments('idcot');
            $table->enum('inciva', ['0', '1']);
            $table->enum('estado', ['aberto', 'aprovado']);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('preco_id');
            $table->unsignedInteger('cliente_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('preco_id')->references('id')->on('preco_actividade');
            $table->foreign('cliente_id')->references('id')->on('cliente');
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
        Schema::dropIfExists('cotacao_solic');
    }
}
