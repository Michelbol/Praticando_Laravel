<?php

namespace App\Http\Controllers\site;

use App\Dieta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DietaController extends Controller{
    public function index(){
        $registros = Dieta::all();
        return view('site.dieta.index', compact('registros'));
    }

    public function adicionar(){
        return view('site.dieta.adicionar');
    }
    public function salvar(Request $request){
        $dados = $request->all();
        $dietas = new Dieta();

        $dietas->nome = $dados['nome'];

        $dietas->save();

        return redirect()->route('site.dietas');
    }

    public function editar($id){
        $dietas = Dieta::find($id);
        return view('site.dieta.editar', compact('dietas'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $dietas = Dieta::find($id);

        $dietas->nome = $dados['nome'];

        $dietas->update();

        return redirect()->route('site.dietas');
    }

    public function refeicao($id){
        $dietas = Dieta::find($id);
        $itemdietas = $dietas->itemdieta()->get();
        return view('site.dieta.refeicoes', compact('dietas', 'itemdietas'));
    }

    public function deletar($id){
        Dieta::find($id)->delete();
        return redirect()->route('site.dietas');
    }
}
