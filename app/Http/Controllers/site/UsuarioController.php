<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

}
