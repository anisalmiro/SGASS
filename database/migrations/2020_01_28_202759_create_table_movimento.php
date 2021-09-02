<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMovimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimento', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('entrada')->nullable($value = true);
            $table->integer('saida')->nullable($value = true);
            $table->integer('numeroDu')->nullable($value = true);
            $table->string('estado')->nullable()->unsigned();
            $table->unsignedInteger('req_id')->nullable($value = true);
            $table->unsignedInteger('stock_id')->nullable($value = true);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('solec_id')->nullable($value = true);
            $table->foreign('req_id')->references('id')->on('requisicoes')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('solec_id')->references('id')->on('solecitacao')->onDelete('cascade');
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
        Schema::dropIfExists('movimento');
    }
}
