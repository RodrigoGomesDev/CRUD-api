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
            // 'cpf' => ['required', 'min:11', 'max:11'],
            // 'rg' => ['required', 'min:11', 'max:11'],
            // 'nascimento' => ['required'],
            // 'cep' => ['required', 'min:11', 'max:11'],
            // 'rua' => ['required', 'string', 'min:3'],
            // 'numero' => ['required'],
            // 'bairro' => ['required', 'string', 'min:3'],
            // 'complemento' => ['string', 'min:3'],
            // 'cidade' => ['required', 'string', 'min:3'],
            // 'estado' => ['required', 'string', 'max:2'],
            // 'referencia' => ['string', 'min:3'],
            // 'telefone_fixo' => ['required', 'max:9'],
            // 'celular' => ['required', 'max:9'],
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
            // 'nascimento' => $data['nascimento'],
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
        ]);
    }
}
