<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function __construct(User $user) {
        $this->repository = $user;
    }

    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        $users = DB::table('users');

        return view('profile.edit', ['users' => $users]);
    }

    public function newEdit(User $user)
    {
        $users = DB::table('users');

        return view('users.info-user', ['users' => $users]);
    }


    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $user = auth()->user();
        $users = $request->all();
        $user->update($users);
        return back()->withStatus(__('Perfil editado com sucesso'));
    }

    public function newUpdate(ProfileRequest $request)
    {        
        $user = auth()->user();
        $users = $request->all();
        $user->update($users);

        return redirect()->route('home')->with(['statusNew' => 'Informações de usuário atualizadas com sucesso']);


        // return redirect()->route('home');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Password successfully updated.'));
    }
}
