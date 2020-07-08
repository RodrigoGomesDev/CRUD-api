<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends UserController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cpf' => ['required'],
            'rg' => ['required'],
            'nascimento' => ['required'],
            'cep' => ['required'],
            'rua' => ['required'],
            'numero' => ['required'],
            'bairro' => ['required'],
            'complemento' => ['string'],
            'cidade' => ['required'],
            'estado' => ['required'],
            'referencia' => ['string'],
            'telefone_fixo' => ['required'],
            'celular' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'nascimento' => $data['nascimento'],
            'cep' => $data['cep'],
            'rua' => $data['rua'],
            'numero' => $data['numero'],
            'bairro' => $data['bairro'],
            'complemento' => $data['complemento'],
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'referencia' => $data['referencia'],
            'telefone_fixo' => $data['telefone_fixo'],
            'celular' => $data['celular'],
            'email' => $data['email'],


            'tipo_usuario' => $data['tipo_usuario'],

            'password' => Hash::make($data['password']),
            // 'forma_pagamento' => $data['forma_pagamento'],
            
            'site' => $data['site'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'linkedin' => $data['linkedin'],
            'foto' => $data['foto'],
            'crm' => $data['crm'],
            'coren' => $data['coren'],
            'crf' => $data['crf'],
            'cofen' => $data['cofen'],
            'crn' => $data['crn'],
            'cri' => $data['cri'],
            'assinatura_digital' => $data['assinatura_digital'],

            'tecnico' => $data['tecnico'],
            'instituicao_tecnico' => $data['instituicao_tecnico'],
            'conclusao_tecnico' => $data['conclusao_tecnico'],

            'superior_completo' => $data['superior_completo'],
            'instituicao_superior' => $data['instituicao_superior'],
            'conclusao_superior' => $data['conclusao_superior'],

            'pos_graduacao' => $data['pos_graduacao'],
            'instituicao_pos' => $data['instituicao_pos'],
            'conclusao_pos' => $data['conclusao_pos'],


            'mestrado' => $data['mestrado'],
            'instituicao_mestrado' => $data['instituicao_mestrado'],
            'conclusao_mestrado' => $data['conclusao_mestrado'],

            'doutorado' => $data['doutorado'],
            'instituicao_doutorado' => $data['instituicao_doutorado'],
            'conclusao_doutorado' => $data['conclusao_doutorado'],

            'especializacao' => $data['especializacao'],
            'instituicao_especializacao' => $data['instituicao_especializacao'],
            'conclusao_especializacao' => $data['conclusao_especializacao'],

            'diploma_certificado' => $data['diploma_certificado'],

            'nomeContato1' => $data['nomeContato1'],
            'emailContato1' => $data['emailContato1'],
            'celContato1' => $data['celContato1'],

            'nomeContato2' => $data['nomeContato2'],
            'emailContato2' => $data['emailContato2'],
            'celContato2' => $data['celContato2'],


            'forma_recebimento' => $data['forma_recebimento'],
        ]);
    }
}
