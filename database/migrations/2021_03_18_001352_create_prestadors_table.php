<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('e-mail');
            $table->integer('cpf');
            $table->string('telefone');
            $table->unsignedBigInteger('rede-_socials_id');
            $table->foreign('rede-_socials_id')->references('id')->on('rede-_socials');
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
        Schema::dropIfExists('prestadors');
    }
}
