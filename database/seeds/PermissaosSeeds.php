<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissaosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //=======================================Inicio Alunos========================================//
        self::verificaPermissao('Alunos');
        self::verificaPermissao('Alunos\Adicionar');
        self::verificaPermissao('Alunos\Editar');
        self::verificaPermissao('Alunos\Deletar');
        self::verificaPermissao('Alunos\Treinos');
        self::verificaPermissao('Alunos\Treinos\Adicionar');
        self::verificaPermissao('Alunos\Treinos\Remover');
        self::verificaPermissao('Alunos\Treinos\Exercicios');
        self::verificaPermissao('Alunos\Treinos\Exercicios\Adicionar');
        self::verificaPermissao('Alunos\Treinos\Exercicios\Remover');
        //=======================================Fim Alunos========================================//
        //=======================================Inicio Treinos========================================//
        self::verificaPermissao('Treinos');
        self::verificaPermissao('Treinos\Adicionar');
        self::verificaPermissao('Treinos\Editar');
        self::verificaPermissao('Treinos\Deletar');
        self::verificaPermissao('Treinos\Exercicios');
        //=======================================Fim Treinos========================================//
        //=======================================Inicio Exercícios========================================//
        self::verificaPermissao('Exercicios');
        self::verificaPermissao('Exercicios\Adicionar');
        self::verificaPermissao('Exercicios\Editar');
        self::verificaPermissao('Exercicios\Deletar');
        //=======================================Fim Exercícios========================================//
        //=======================================Inicio Dietas========================================//
        self::verificaPermissao('Dietas');
        self::verificaPermissao('Dietas\Adicionar');
        self::verificaPermissao('Dietas\Editar');
        self::verificaPermissao('Dietas\Deletar');
        self::verificaPermissao('Dietas\Refeicoes');
        self::verificaPermissao('Dietas\Refeicoes\Adicionar');
        self::verificaPermissao('Dietas\Refeicoes\Editar');
        self::verificaPermissao('Dietas\Refeicoes\Deletar');
        //=======================================Fim Dietas========================================//

        self::verificaPermissao('Painel Administrativo');
    }

    public function verificaPermissao($permissao){
        if(!DB::table('permissaos')->where('nome', $permissao)->get()->count()){
            DB::table('permissaos')->insert([
                'nome' => $permissao,
            ]);
            echo("Permissão criada com Sucesso: ".$permissao."
");
        }
    }
}
