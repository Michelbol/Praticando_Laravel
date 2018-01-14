<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller{
    public function login(Request $request){
        $dados = $request->all();

        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])){
            \Session::flash('mensagem', ['msg'=>'Login realizado com sucesso!','class'=>'green white-text']);
            return redirect()->route('site.principal');
        }
        \Session::flash('mensagem', ['msg'=>'Erro! Confira seus dados!','class'=>'red white-text']);
        return redirect()->route('site.login');
    }
    public function sair(){
        Auth::logout();
        return redirect()->route('site.login');
    }

    public function index(){
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function adicionar(){
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        try{
            DB::connection()->getPdo()->beginTransaction();
            User::create([
                'name' => $dados['nome'],
                'email' => $dados['email'],
                'password' => bcrypt($dados['password'])
            ]);
            DB::connection()->getPdo()->commit();
        }catch (\Exception $e){

        }
        return redirect()->route('admin.usuarios');
    }

    public function editar($id){
        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $usuario = User::find($id);
        $usuario->name = $dados['nome'];
        $usuario->email = $dados['email'];
        if($dados['password']){
            $usuario->password = bcrypt($dados['password']);
        }

        $usuario->update();

        return redirect()->route('admin.usuarios');
    }

    public function deletar($id){
        User::find($id)->delete();
        return redirect()->route('admin.usuarios');
    }

}
