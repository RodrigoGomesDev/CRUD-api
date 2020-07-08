<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //Campos padrões
        'name', 
        'cpf', 
        'rg', 
        'cep', 
        'nascimento', 
        'rua', 
        'numero', 
        'bairro', 
        'complemento', 
        'cidade', 
        'estado', 
        'referencia', 
        'telefone_fixo', 
        'celular', 
        'email',
        //============//
        

        //Escolha de tipo de usuário
        'tipo_usuario',
        //========================//

        //CLIENTE
        'password',
        'forma_pagamento',
        //=============//
        
        //PROFISSIONAL
        'site', 
        'facebook', 
        'twitter', 
        'linkedin', 
        'foto', 
        'crm', 
        'coren', 
        'crf', 
        'cofen', 
        'crn', 
        'cri', 
        'assinatura_digital',

        'tecnico',
        'instituicao_tecnico',
        'conclusao_tecnico',

        'superior_completo',
        'instituicao_superior',
        'conclusao_superior',

        'pos_graduacao',
        'instituicao_pos',
        'conclusao_pos',

        'mestrado',
        'instituicao_mestrado',
        'conclusao_mestrado',

        'doutorado',
        'instituicao_doutorado',
        'conclusao_doutorado',

        'especializacao',
        'instituicao_especializacao',
        'conclusao_especializacao',


        'diploma_certificado',

        'nomeContato1', 
        'emailContato1', 
        'celContato1', 

        'nomeContato2', 
        'emailContato2', 
        'celContato2', 
        
        'forma_recebimento',
        //============================//

        // 'raioAtuacaoEndereco', 
        // 'raioAtuacaoLocalizacao', 

        //Informações adicionais
        'cartao_sus', 
        'nome_mae', 
        'sexo', 
        'naturalidade', 
        'nacionalidade', 
        'cor', 
        'estado_civil', 
        'nome_conjuge', 
        'num_filhos', 
        'credo_religiao', 
        'escolaridade', 
        'profissao', 
        'situacao_previdenciaria', 
        'telefone_emergencial', 
        'alergia_medicamentos', 
        'quais', 
        'cirurgia', 
        'doenca_cronica', 
        'vicio', 
        'queixas', 
        'medicacao', 
        //======================//
        
        'is_admin'

    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
