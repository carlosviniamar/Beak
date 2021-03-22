<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpf');
            $table->string('celular');
            $table->unsignedBigInteger('enderecos_id');
            $table->foreign('enderecos_id')->references('id')->on('enderecos');
            $table->unsignedBigInteger('rede-_socials');
            $table->foreign('rede-_socials_id')->references('id')->on('rede-_socials');
            $table->unsignedBigInteger('servicos');
            $table->foreign('servicos_id')->references('id')->on('servicos');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
