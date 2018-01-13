<?php

use App\Aluno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoTreinoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aluno = Aluno::find(1);
        if(!$aluno->treinos()->where('treino_id', 2)->get()->count()){
            DB::table('aluno_treino')->insert([
                'aluno_id' => 1,
                'treino_id' => 2,
            ]);
        }
        $aluno = Aluno::find(2);
        if(!$aluno->treinos()->where('treino_id', 1)->get()->count()){
            DB::table('aluno_treino')->insert([
                'aluno_id' => 2,
                'treino_id' => 1,
            ]);
        }
    }
}
