<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prestadors_id');
            $table->unsignedBigInteger('rede-_socials_id');
            $table->foreign('prestadors_id')->references('id')->on('prestadors');
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
        Schema::dropIfExists('contems');
    }
}
