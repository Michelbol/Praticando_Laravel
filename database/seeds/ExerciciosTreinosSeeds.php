<?php

use App\Treino;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciciosTreinosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treino = Treino::find(1);
        if(!$treino->exercicios()->where('exercicio_id', 1)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 1,
                'treino_id' => 1,
            ]);
        }
        if(!$treino->exercicios()->where('exercicio_id', 2)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 2,
                'treino_id' => 1,
            ]);
        }
        if(!$treino->exercicios()->where('exercicio_id', 3)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 3,
                'treino_id' => 1,
            ]);
        }
        //===========================================================================//
        $treino = Treino::find(2);
        if(!$treino->exercicios()->where('exercicio_id', 1)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 1,
                'treino_id' => 2,
            ]);
        }
        if(!$treino->exercicios()->where('exercicio_id', 2)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 2,
                'treino_id' => 2,
            ]);
        }
        if(!$treino->exercicios()->where('exercicio_id', 3)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 3,
                'treino_id' => 2,
            ]);
        }
        //===========================================================================//
        $treino = Treino::find(3);
        if(!$treino->exercicios()->where('exercicio_id', 1)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 1,
                'treino_id' => 3,
            ]);
        }
        if(!$treino->exercicios()->where('exercicio_id', 2)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 2,
                'treino_id' => 3,
            ]);
        }
        if(!$treino->exercicios()->where('exercicio_id', 3)->get()->count()){
            DB::table('exercicio_treino')->insert([
                'exercicio_id' => 3,
                'treino_id' => 3,
            ]);
        }
    }
}
