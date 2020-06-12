<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'nascimento' => 2020-06-11
        
        // User::create(['name' => 'Admin', 'email' => 'admin@material.com', 'password' => bcrypt('secret'), 'is_admin' => 0]);
        User::create(['name' => 'teste', 'cpf' => 1, 'rg' => 1, 'cep' => 1, 'rua'=> 'teste', 'numero' => 1, 'bairro' => 'teste', 'complemento' => 'teste', 'cidade' => 'teste', 'estado' => 'teste', 'referencia' => 'teste', 'telefone_fixo' => 1, 'celular' => 1, 'email' => 't@t.com', 'password' => 'teste', 'is_admin' => 1]);

        // User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password'), 'is_admin' => 1]);
        // User::create(['name' => 'User', 'email' => 'user@example.com', 'password' => bcrypt('password'), 'is_admin' => 0]);
    }
}
