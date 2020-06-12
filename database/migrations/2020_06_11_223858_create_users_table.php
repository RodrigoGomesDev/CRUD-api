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
            $table->integer('cpf');
            $table->integer('rg');
            // $table->date('nascimento');
            $table->integer('cep');
            $table->string('rua');
            $table->tinyInteger('numero');
            $table->string('bairro');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado');
            $table->string('referencia');
            $table->integer('telefone_fixo');
            $table->integer('celular');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->nullable();
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
