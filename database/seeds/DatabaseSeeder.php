<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
         $this->call(UsuariosSeeds::class);
         $this->call(AlunosSeeds::class);
         $this->call(ExerciciosSeeds::class);
         $this->call(TreinosSeeds::class);
         $this->call(DietasSeeds::class);
         $this->call(ItensDietaSeeds::class);
         $this->call(PermissaoSeeds::class);
    }
}
