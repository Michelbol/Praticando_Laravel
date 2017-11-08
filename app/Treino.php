<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model{
    protected $fillable=[
        'nome',
        'descricao',
    ];

    public function alunos(){
        return $this->belongsToMany(Aluno::class);
    }

    public function exercicios(){
        return $this->belongsToMany(Exercicio::class);
    }

    public function adicionarExercicio(Exercicio $exercicio){
        return $this->exercicios()->attach($exercicio->id);
    }

    public function removerExercicio(Exercicio $exercicio){
        return $this->exercicios()->detach($exercicio->id);
    }
}