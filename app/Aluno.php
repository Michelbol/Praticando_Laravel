<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model{
    public function treinos(){
        return $this->belongsToMany(Treino::class);
    }
    public function adicionarTreino(Treino $treino){
        return $this->treinos()->attach($treino->id);
    }
    public function removerTreino(Treino $treino){
        return $this->treinos()->detach($treino->id);
    }
    public function dieta(){
        return $this->belongsToMany(Dieta::class);
    }
}
