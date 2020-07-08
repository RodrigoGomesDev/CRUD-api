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
            $table->text('forma_pagamento')->default(null);
            //========================================//

            //PROFISSIONAL
            $table->text('site')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('foto')->nullable();
            $table->text('crm')->nullable();
            $table->text('coren')->nullable();
            $table->text('crf')->nullable();
            $table->text('cofen')->nullable();
            $table->text('crn')->nullable();
            $table->text('cri')->nullable();
            $table->text('assinatura_digital')->nullable();
            
            $table->text('tecnico')->nullable();
            $table->text('instituicao_tecnico')->nullable();
            $table->text('conclusao_tecnico')->nullable();

            $table->text('superior_completo')->nullable();
            $table->text('instituicao_superior')->nullable();
            $table->text('conclusao_superior')->nullable();

            $table->text('pos_graduacao')->nullable();
            $table->text('instituicao_pos')->nullable();
            $table->text('conclusao_pos')->nullable();

            $table->text('mestrado')->nullable();
            $table->text('instituicao_mestrado')->nullable();
            $table->text('conclusao_mestrado')->nullable();

            $table->text('doutorado')->nullable();
            $table->text('instituicao_doutorado')->nullable();
            $table->text('conclusao_doutorado')->nullable();

            $table->text('especializacao')->nullable();
            $table->text('instituicao_especializacao')->nullable();
            $table->text('conclusao_especializacao')->nullable();


            $table->text('diploma_certificado')->nullable();

            $table->text('nomeContato1')->nullable();
            $table->text('emailContato1')->nullable();
            $table->text('celContato1')->nullable();

            $table->text('nomeContato2')->nullable();
            $table->text('emailContato2')->nullable();
            $table->text('celContato2')->nullable();

            $table->text('forma_recebimento')->nullable();

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
            $table->boolean('is_admin');
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
