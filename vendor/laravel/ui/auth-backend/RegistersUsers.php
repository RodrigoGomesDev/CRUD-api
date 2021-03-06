<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\ImageRepository;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request, User $user)
    {

        $this->validator($request->all())->validate();

        event(new Registered($data = $request->all()));

        if ($request->hasFile('foto') && $request->foto->isValid()) {

            if ($user->foto && Storage::exists($user->foto)) {
                Storage::delete($user->foto);
            }

            $imagePath = $request->foto->store('users');

            $data['foto'] = $imagePath;
        }

        if ($request->hasFile('diploma_certificado') && $request->diploma_certificado->isValid()) {

            if ($user->diploma_certificado && Storage::exists($user->diploma_certificado)) {
                Storage::delete($user->diploma_certificado);
            }

            $diplomaPath = $request->diploma_certificado->store('diploma-certificados');

            $data['diploma_certificado'] = $diplomaPath;
        }

        if ($request->hasFile('assinatura_digital') && $request->assinatura_digital->isValid()) {

            if ($user->assinatura_digital && Storage::exists($user->assinatura_digital)) {
                Storage::delete($user->assinatura_digital);
            }

            $assinaturaPath = $request->assinatura_digital->store('assinatura-digital');

            $data['assinatura_digital'] = $assinaturaPath;
        }

        if ($data['tipo_usuario'] === 'Profissional') {
            $data['is_admin'] = 2;
            $data['forma_pagamento'] = null;
        }
        else {
            $data['is_admin'] = 0;
        }

        if ($data['tipo_usuario'] === 'Cliente') {
            $data['foto'] = null;
            $data['assinatura_digital'] = null;
            $data['diploma_certificado'] = null;
            $data['forma_recebimento'] = null;
            $data['site'] = null;
            $data['facebook'] = null;
            $data['twitter'] = null;
            $data['linkedin'] = null;
        }

        $user = $this->create($data);


        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return redirect()->route('login');
        }

        return $request->wantsJson()
                    ? new Response('', 201)
                    : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
