<?php

use App\Aluno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
//        factory(App\Aluno::class, 10)->create();
        if(!Aluno::where('nome', 'Michel Bolzon Souza Dos Reis')->get()->count()){
            DB::table('alunos')->insert([
                'nome' => "Michel Bolzon Souza Dos Reis",
                'endereco' => "Avenida brasil, 879",
                'bairro' => 'Centro',
                'email' => 'michel.bolzon123@gmail.com',
            ]);
        }
        if(!Aluno::where('nome', 'Larissa Zakaluk de Souza')->get()->count()){
            DB::table('alunos')->insert([
                'nome' => "Larissa Zakaluk de Souza",
                'endereco' => "Rua augusta, 48",
                'bairro' => 'Centro',
                'email' => 'larissazakaluk1234@hotmail.com',
            ]);
        }
    }
}
