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
            // 'name' => ['required', 'string', 'max:255'],
            // 'cpf' => ['required'],
            // 'rg' => ['required'],
            // 'nascimento' => ['required'],
            // 'cep' => ['required'],
            // 'rua' => ['required'],
            // 'numero' => ['required'],
            // 'bairro' => ['required'],
            // 'complemento' => ['string'],
            // 'cidade' => ['required'],
            // 'estado' => ['required'],
            // 'referencia' => ['string'],
            // 'telefone_fixo' => ['required'],
            // 'celular' => ['required'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'password' => Hash::make($data['password']),
            'tipo_usuario' => $data['tipo_usuario'],
            'site' => $data['site'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'linkedin' => $data['linkedin'],
            'foto' => $data['foto'],
            'diploma_certificado' => $data['diploma_certificado']
        ]);
    }
}
