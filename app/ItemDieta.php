<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDieta extends Model{
    protected $fillable=[
        'diasemana',
        'descricao',
        'horario',
//        'dieta_id'
    ];
    public function dieta(){
        return $this->belongsToMany(Dieta::class);
    }
}
