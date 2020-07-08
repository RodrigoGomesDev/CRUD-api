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

            //Campos padrões
            $table->text('name');
            $table->text('cpf')->unique();
            $table->text('rg')->unique();
            $table->text('nascimento');
            $table->text('cep');
            $table->text('rua');
            $table->text('numero');
            $table->text('bairro');
            $table->text('complemento')->nullable();
            $table->text('cidade');
            $table->text('estado');
            $table->text('referencia')->nullable();
            $table->text('telefone_fixo')->unique();
            $table->text('celular')->unique();
            $table->text('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            //===============================================//


            //Escolha de tipo de usuário
            $table->text('tipo_usuario');
            //=========================//

            //CLIENTE
            $table->text('password');
            $table->text('forma_pagamento')->nullable();
            //========================================//

            //PROFISSIONAL
            $table->text('site')->nullable();
            $table->text('facebook');
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('foto');
            $table->text('crm')->nullable();
            $table->text('coren')->nullable();
            $table->text('crf')->nullable();
            $table->text('cofen')->nullable();
            $table->text('crn')->nullable();
            $table->text('cri')->nullable();
            $table->text('assinatura_digital')->nullable();
            
            $table->text('tecnico');
            $table->text('instituicao_tecnico');
            $table->text('conclusao_tecnico');

            $table->text('superior_completo');
            $table->text('instituicao_superior');
            $table->text('conclusao_superior');

            $table->text('pos_graduacao');
            $table->text('instituicao_pos');
            $table->text('conclusao_pos');

            $table->text('mestrado');
            $table->text('instituicao_mestrado');
            $table->text('conclusao_mestrado');

            $table->text('doutorado');
            $table->text('instituicao_doutorado');
            $table->text('conclusao_doutorado');

            $table->text('especializacao');
            $table->text('instituicao_especializacao');
            $table->text('conclusao_especializacao');


            $table->text('diploma_certificado')->nullable();

            $table->text('nomeContato1')->nullable();
            $table->text('emailContato1')->nullable();
            $table->text('celContato1')->nullable();

            $table->text('nomeContato2')->nullable();
            $table->text('emailContato2')->nullable();
            $table->text('celContato2')->nullable();

            $table->text('forma_recebimento');

            //=============================================//


            // $table->text('raioAtuacaoEndereco')->nullable();
            // $table->text('raioAtuacaoLocalizacao')->nullable();

            //Informações adicionais
            $table->text('cartao_sus')->nullable()->unique();
            $table->text('nome_mae')->nullable();
            $table->text('sexo')->nullable();
            $table->text('naturalidade')->nullable();
            $table->text('nacionalidade')->nullable();
            $table->text('cor')->nullable();
            $table->text('estado_civil')->nullable();
            $table->text('nome_conjuge')->nullable();
            $table->text('num_filhos')->nullable();
            $table->text('credo_religiao')->nullable();
            $table->text('escolaridade')->nullable();
            $table->text('profissao')->nullable();
            $table->text('situacao_previdenciaria')->nullable();
            $table->text('telefone_emergencial')->nullable();
            $table->text('alergia_medicamentos')->nullable();
            $table->text('quais')->nullable();
            $table->text('cirurgia')->nullable();
            $table->text('doenca_cronica')->nullable();
            $table->text('vicio')->nullable();
            $table->text('queixas')->nullable();
            $table->text('medicacao')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->nullable();
            //================================================//
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
