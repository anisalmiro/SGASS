<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaSolecitacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solecitacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('estado');
            $table->unsignedInteger('clie_id');
            $table->unsignedInteger('avaria_id');
            $table->unsignedInteger('equip_id');
            $table->unsignedInteger('distrit_id');
            $table->foreign('clie_id')->references('id')->on('cliente');
            $table->foreign('equip_id')->references('id')->on('equipamento');
            $table->foreign('avaria_id')->references('id')->on('avaria');
            $table->foreign('distrit_id')->references('id')->on('distrito');
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
        Schema::dropIfExists('solecitacao');
    }
}
