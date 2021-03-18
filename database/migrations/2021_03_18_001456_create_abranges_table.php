<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbrangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abranges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicos_id');
            $table->foreign('servicos_id')->references('id')->on('servicos');
            $table->unsignedBigInteger('avaliacaos_id');
            $table->foreign('avaliacaos_id')->references('id')->on('avaliacaos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abranges');
    }
}
