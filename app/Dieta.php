<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model{
    public function aluno(){
        return $this->belongsToMany(Aluno::class);
    }
    public function itemDieta(){
        return $this->hasMany(ItemDieta::class);
    }
}
