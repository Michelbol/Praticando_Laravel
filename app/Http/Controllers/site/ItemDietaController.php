<?php

namespace App\Http\Controllers\site;

use App\Dieta;
use App\ItemDieta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemDietaController extends Controller
{
    public function index($id, $diasemana){
        $registro = Dieta::find($id);
        $itemdieta = $registro->itemDieta()->whereDiasemana($diasemana)->get();
        return view('site.dieta.itemdieta.index', compact('registro', 'itemdieta', 'diasemana'));
    }

    public function adicionar($id, $diasemana){
        $registro = Dieta::find($id);
        $itemdieta = $registro->itemDieta()->whereDiasemana($diasemana)->get();
        return view('site.dieta.itemdieta.adicionar', compact('registro', 'itemdieta', 'diasemana'));
    }
    public function salvar(Request $request){
        $dados = $request->all();
        $itemdieta = new ItemDieta();

        $itemdieta->dieta_id = $dados['dieta_id'];
        $itemdieta->descricao = $dados['descricao'];
        $itemdieta->horario = $dados['horario'];
        $itemdieta->diasemana = $dados['diasemana'];

        $itemdieta->save();

        return redirect()->route('site.dieta.refeicoes', [$itemdieta->dieta_id, $itemdieta->diasemana]);
    }

//    public function editar($id){
//        $dietas = Dieta::find($id);
//        $itemdietas = $dietas->itemdieta()->get();
//        return view('site.dieta.editar', compact('dietas', 'itemdietas'));
//    }
//
//    public function atualizar(Request $request, $id){
//        $dados = $request->all();
//        $dietas = Dieta::find($id);
//
//        $dietas->nome = $dados['nome'];
//
//        $dietas->update();
//
//        return redirect()->route('site.dietas');
//    }
//
//    public function deletar($id){
//        Dieta::find($id)->delete();
//        return redirect()->route('site.dietas');
//    }

}
