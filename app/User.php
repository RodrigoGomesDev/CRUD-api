<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'password', 
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
        'is_admin'
    ];

    // 'nascimento'

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
