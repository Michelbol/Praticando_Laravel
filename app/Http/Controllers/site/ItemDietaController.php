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
        return view('site.dieta.itemdieta.adicionar', compact('registro', 'diasemana'));
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

    public function editar($id){
        $itemdieta = ItemDieta::find($id);
        return view('site.dieta.itemdieta.editar', compact('itemdieta'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $itemdieta = ItemDieta::find($id);
        $itemdieta->update($dados);

        return redirect()->route('site.dieta.refeicoes', [$itemdieta->dieta_id, $itemdieta->diasemana]);
    }

    public function deletar($id){
        $itemdieta = ItemDieta::find($id);
        $dieta_id = $itemdieta->dieta_id;
        $diasemana = $itemdieta->diasemana;
        $itemdieta->delete();
        return redirect()->route('site.dieta.refeicoes', [$dieta_id, $diasemana]);
    }

}
