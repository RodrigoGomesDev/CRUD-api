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
            $table->string('cpf');
            $table->string('rg');
            $table->string('nascimento');
            $table->string('cep');
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->string('referencia')->nullable();
            $table->string('telefone_fixo');
            $table->string('celular');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cartao_sus')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('sexo')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('cor')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('nome_conjuge')->nullable();
            $table->string('num_filhos')->nullable();
            $table->string('credo_religiao')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('profissao')->nullable();
            $table->string('situacao_previdenciaria')->nullable();
            $table->string('telefone_emergencial')->nullable();
            $table->string('alergia_medicamentos')->nullable();
            $table->string('quais')->nullable();
            $table->string('cirurgia')->nullable();
            $table->string('doenca_cronica')->nullable();
            $table->string('vicio')->nullable();
            $table->string('queixas')->nullable();
            $table->string('medicacao')->nullable();
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
