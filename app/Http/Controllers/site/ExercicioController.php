<?php

namespace App\Http\Controllers\site;

use App\Exercicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExercicioController extends Controller
{
    public function index(){
        $exercicios = Exercicio::all();

        return view('site.exercicios.index', compact('exercicios'));
    }

    public function adicionar(){
        return view('site.exercicios.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        $exercicios = new Exercicio();

        $exercicios->nome = $dados['nome'];
        $exercicios->musculo = $dados['musculo'];

        $exercicios->save();

        return redirect()->route('site.exercicio');
    }

    public function editar($id){
        $exercicios = Exercicio::find($id);
        return view('site.exercicios.editar', compact('exercicios'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $exercicios = Exercicio::find($id);

        $exercicios->nome = $dados['nome'];
        $exercicios->musculo = $dados['musculo'];

        $exercicios->update();

        return redirect()->route('site.exercicio');
    }

    public function deletar($id){
        Exercicio::find($id)->delete();
        return redirect()->route('site.exercicio');
    }
}
