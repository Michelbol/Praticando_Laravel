<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    public function treinos(){
        return $this->belongsToMany(Treino::class);
    }
}
