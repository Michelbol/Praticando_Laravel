<?php

use App\Treino;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreinosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Treino::class, 15)->create();
        if(!Treino::where('nome', 'Treino A')->get()->count()) {
            DB::table('treinos')->insert([
                'nome' => 'Treino A',
                'descricao' => 'Treino voltado para iniciantes de peso leve',
            ]);
        }
        if(!Treino::where('nome', 'Treino B')->get()->count()) {
            DB::table('treinos')->insert([
                'nome' => 'Treino B',
                'descricao' => 'Treino voltado para iniciantes de peso médio',
            ]);
        }
        if(!Treino::where('nome', 'Treino C')->get()->count()) {
            DB::table('treinos')->insert([
                'nome' => 'Treino C',
                'descricao' => 'Treino voltado para iniciantes de pesados',
            ]);
        }
    }
}
