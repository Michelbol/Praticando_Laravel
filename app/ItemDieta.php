<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDieta extends Model{
    public function dieta(){
        return $this->belongsToMany(Dieta::class);
    }
}
