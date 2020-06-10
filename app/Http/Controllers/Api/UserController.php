<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    public function __construct(User $user) {
        $this->User = $user;
    }

    public function index() {

    //Retornando pra página, em forma de json todos os usuários com uma páginação de 10 em 10//
        return response()->json($this->User->paginate(10));
    }

    public function show($id) {

    //Usando a váriavel $user, para buscar dentro do model User os $id dos usuários//
        $user = $this->User->find($id);

    //Retornando a váriavel $user, em formato json//
        return response()->json($user);
    }

    public function store(Request $request) {
        $create_user = User::create($request->all());

        return response()->json(['msg' => "O usuário $request->name foi criado com sucesso!"]);
    }

    public function update($id , Request $request) {

    //Criando variável para, pegar todos os users//
        $update_user = $request->all();
    
    //Usando o moder User, para pegar os $id dos users//
        $user = $this->User->find($id);

    //Pegando o id, que for específicado na url, e atualizar o product que a contém//
        $user->update($update_user);

        return response()->json(['msg' => "O usuário $user->name foi atualizado com sucesso!"]);
    }

    public function delete($id) {
        //Destruindo um usuário, pelo ip dele//
        $delete_user = User::destroy($id);

        return response()->json(['msg' => "O usuário foi deletado com sucesso!"]);
    }
}
