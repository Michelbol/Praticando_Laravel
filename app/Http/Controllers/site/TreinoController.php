<?php

namespace App\Http\Controllers\site;

use App\Exercicio;
use App\Treino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TreinoController extends Controller
{
    public function index(){
        $treinos = Treino::all();

        return view('site.treino.index', compact('treinos'));
    }

    public function adicionar(){
        return view('site.treino.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        $treino = new Treino();

        $treino->nome = $dados['nome'];
        $treino->descricao = $dados['descricao'];

        $treino->save();

        return redirect()->route('site.treinos');
    }

    public function editar($id){
        $treino = Treino::find($id);
        return view('site.treino.editar', compact('treino'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $treino = Treino::find($id);

        $treino->nome = $dados['nome'];
        $treino->descricao = $dados['descricao'];

        $treino->update();

        return redirect()->route('site.treinos');
    }

    public function deletar($id){
        Treino::find($id)->delete();
        return redirect()->route('site.treinos');
    }

    public function exercicio($id){
        $treino = Treino::find($id);
        $exercicios = Exercicio::all();

        return view('site.treino.exercicios', compact('treino', 'exercicios'));
    }

    public function salvarExercicio(Request $request, $id){
        $treino = Treino::find($id);
        $dados = $request->all();
        $exercicio = Exercicio::find($dados['exercicio_id']);
        $treino->adicionarExercicio($exercicio);

        return redirect()->route('site.treino.exercicio', $treino->id);
    }

    public function deletarExercicio($treino_id, $exercicio_id){
        $treino = Treino::find($treino_id);
        $exercicio = Exercicio::find($exercicio_id);
        $treino->removerExercicio($exercicio);

        return redirect()->route('site.treino.exercicio', $treino->id);
    }
}
