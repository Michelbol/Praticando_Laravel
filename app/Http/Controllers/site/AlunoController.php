<?php

namespace App\Http\Controllers\site;

use App\Aluno;
use App\Exercicio;
use App\Treino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller{
    public function index(){
        $alunos = Aluno::all();
        return view('site.aluno.index', compact('alunos'));
    }

    public function adicionar(){
        return view('site.aluno.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        $aluno = new Aluno();

        $aluno->nome = $dados['nome'];
        $aluno->endereco = $dados['endereco'];
        $aluno->bairro = $dados['bairro'];
        $aluno->email = $dados['email'];

        $aluno->save();

        return redirect()->route('site.alunos');
    }

    public function editar($id){
        $aluno = Aluno::find($id);
        return view('site.aluno.editar', compact('aluno'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $aluno = Aluno::find($id);
        $aluno->nome = $dados['nome'];
        $aluno->endereco = $dados['endereco'];
        $aluno->bairro = $dados['bairro'];
        $aluno->email = $dados['email'];

        $aluno->update();

        return redirect()->route('site.alunos');
    }

    public function deletar($id){
        Aluno::find($id)->delete();
        return redirect()->route('site.alunos');
    }
    public function treino($id){
        $aluno = Aluno::find($id);
        $treinos = Treino::all();

        return view('site.aluno.treino', compact('treinos', 'aluno'));
    }

    public function salvarTreino(Request $request, $id){
        $aluno = Aluno::find($id);
        $dados = $request->all();
        $treino = Treino::find($dados['treino_id']);
        $aluno->adicionarTreino($treino);

        return redirect()->route('site.aluno.treino', $aluno->id);
    }

    public function deletarTreino($aluno_id, $treino_id){
        $aluno = Aluno::find($aluno_id);
        $treino = Treino::find($treino_id);
        $aluno->removerTreino($treino);

        return redirect()->route('site.aluno.treino', $aluno->id);
    }
    public function treinoExercicios($id_treino, $id_aluno){
        $treino = Treino::find($id_treino);
        $exercicios = Exercicio::all();

        return view('site.aluno.exercicios', compact('exercicios', 'treino', 'id_aluno'));
    }

    public function salvarExercicio(Request $request, $id){
        try{
            $treino = Treino::find($id);
            $dados = $request->all();
            $exercicio = Exercicio::find($dados['exercicio_id']);
            $treino->adicionarExercicio($exercicio);
        }catch (\Exception $e){
            \Session::flash('mensagem', ['msg'=>'Erro! Não foi possível adicionar o exercício!','class'=>'red white-text']);
        }
        return redirect()->back();
    }
    public function deletarExercicio($treino_id, $exercicio_id){
        $treino = Treino::find($treino_id);
        $exercicio = Exercicio::find($exercicio_id);
        $treino->removerExercicio($exercicio);

        return redirect()->back();
    }
}
