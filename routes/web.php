<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/',['as'=>'login', function(){
    if(Auth::check()){
        return redirect()->route('site.principal');
    }
    return view('site.login.index');
}]);
Route::get('/admin',['as'=>'admin.login', function () {
    if(Auth::check()){
        return redirect()->route('admin.principal');
    }
    return view('admin.login.index');
}]);

Route::post('/admin',['as'=>'admin.login', 'uses'=>'UsuarioController@loginAdmin']);
Route::post('/',['as'=>'site.login', 'uses'=>'UsuarioController@login']);

//------------------------------------------------------INICIO LOGADO------------------------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){

    Route::get('/site/sair',['as'=>'site.sair', 'uses'=>'UsuarioController@sair']);

    Route::get('/principal',['as'=>'site.principal', function () {
        return view('site.site');
    }]);
//------------------------------------------------------INICIO ALUNO-------------------------------------------------------------------------
    Route::get('/alunos', ['as' => 'site.alunos', 'uses' =>'site\AlunoController@index']);
    Route::get('/aluno/adicionar', ['as' => 'site.aluno.adicionar', 'uses' =>'site\AlunoController@adicionar']);
    Route::post('/aluno/salvar', ['as' => 'site.aluno.salvar', 'uses' =>'site\AlunoController@salvar']);
    Route::get('/aluno/editar/{id}', ['as' => 'site.aluno.editar', 'uses' =>'site\AlunoController@editar']);
    Route::get('/aluno/deletar/{id}', ['as' => 'site.aluno.deletar', 'uses' =>'site\AlunoController@deletar']);
    Route::post('/aluno/atualizar/{id}', ['as' => 'site.aluno.atualizar', 'uses' =>'site\AlunoController@atualizar']);
//------------------------------------------------------FIM ALUNO----------------------------------------------------------------------------
//------------------------------------------------------INICIO ALUNO/TREINO------------------------------------------------------------------
    Route::get('/aluno/treino/{id}', ['as' => 'site.aluno.treino', 'uses' =>'site\AlunoController@treino']);
    Route::post('/aluno/treino/salvar/{id}', ['as' => 'site.aluno.treino.salvar', 'uses' =>'site\AlunoController@salvarTreino']);
    Route::get('/aluno/treino/deletar/{aluno_id}/{treino_id}', ['as' => 'site.aluno.treino.deletar', 'uses' =>'site\AlunoController@deletarTreino']);
                    //----------------------TREINO/EXERCICIOS-------------------//
    Route::get('/aluno/treino/exercicios/{id_treino}/{id_exercicio}', ['as' => 'site.aluno.treino.exercicio', 'uses' =>'site\AlunoController@treinoExercicios']);
    Route::post('/aluno/treino/exercicio/salvar/{id}', ['as' => 'site.aluno.treino.exercicio.salvar', 'uses' =>'site\AlunoController@salvarExercicio']);
    Route::get('/aluno/treino/exercicio/deletar/{treino_id}/{exercicio_id}', ['as' => 'site.aluno.treino.exercicio.deletar', 'uses' =>'site\AlunoController@deletarExercicio']);
                    //---------------------FIM TREINO/EXERCÍCIOS---------------//
//------------------------------------------------------FIM ALUNO/TREINO---------------------------------------------------------------------
//------------------------------------------------------INICIO TREINO------------------------------------------------------------------------
    Route::get('/treinos', ['as' => 'site.treinos', 'uses' =>'site\TreinoController@index']);
    Route::get('/treino/adicionar', ['as' => 'site.treino.adicionar', 'uses' =>'site\TreinoController@adicionar']);
    Route::post('/treino/salvar', ['as' => 'site.treino.salvar', 'uses' =>'site\TreinoController@salvar']);
    Route::get('/treino/editar/{id}', ['as' => 'site.treino.editar', 'uses' =>'site\TreinoController@editar']);
    Route::post('/treino/atualizar/{id}', ['as' => 'site.treino.atualizar', 'uses' =>'site\TreinoController@atualizar']);
    Route::get('/treino/deletar/{id}', ['as' => 'site.treino.deletar', 'uses' =>'site\TreinoController@deletar']);
//------------------------------------------------------FIM TREINO----------------------------------------------------------------------------
//------------------------------------------------------INICIO TREINO/EXERCICIO---------------------------------------------------------------
    Route::get('/treino/exercicio/{id}', ['as' => 'site.treino.exercicio', 'uses' =>'site\TreinoController@exercicio']);
    Route::post('/treino/exercicio/salvar/{id}', ['as' => 'site.treino.exercicio.salvar', 'uses' =>'site\TreinoController@salvarExercicio']);
    Route::get('/treino/exercicio/deletar/{treino_id}/{exercicio_id}', ['as' => 'site.treino.exercicio.deletar', 'uses' =>'site\TreinoController@deletarExercicio']);
//------------------------------------------------------FIM TREINO/EXERCICIO------------------------------------------------------------------
//------------------------------------------------------INICIO EXERCICIO----------------------------------------------------------------------
    Route::get('/exercicios', ['as' => 'site.exercicios', 'uses' =>'site\ExercicioController@index']);
    Route::get('/exercicio/adicionar', ['as' => 'site.exercicio.adicionar', 'uses' =>'site\ExercicioController@adicionar']);
    Route::post('/exercicio/salvar', ['as' => 'site.exercicio.salvar', 'uses' =>'site\ExercicioController@salvar']);
    Route::get('/exercicio/editar/{id}', ['as' => 'site.exercicio.editar', 'uses' =>'site\ExercicioController@editar']);
    Route::post('/exercicio/atualizar/{id}', ['as' => 'site.exercicio.atualizar', 'uses' =>'site\ExercicioController@atualizar']);
    Route::get('/exercicio/deletar/{id}', ['as' => 'site.exercicio.deletar', 'uses' =>'site\ExercicioController@deletar']);
//------------------------------------------------------FIM EXERCICIO------------------------------------------------------------------------
//------------------------------------------------------INICIO DIETA----------------------------------------------------------------------
    Route::get('/dietas', ['as' => 'site.dietas', 'uses' =>'site\DietaController@index']);
    Route::get('/dieta/adicionar', ['as' => 'site.dieta.adicionar', 'uses' =>'site\DietaController@adicionar']);
    Route::post('/dieta/salvar', ['as' => 'site.dieta.salvar', 'uses' =>'site\DietaController@salvar']);
    Route::get('/dieta/editar/{id}', ['as' => 'site.dieta.editar', 'uses' =>'site\DietaController@editar']);
    Route::get('/dieta/refeicao/{id}', ['as' => 'site.dieta.refeicao', 'uses' =>'site\DietaController@refeicao']);
    Route::post('/dieta/atualizar/{id}', ['as' => 'site.dieta.atualizar', 'uses' =>'site\DietaController@atualizar']);
    Route::get('/dieta/deletar/{id}', ['as' => 'site.dieta.deletar', 'uses' =>'site\DietaController@deletar']);
//------------------------------------------------------FIM DIETA------------------------------------------------------------------------
//------------------------------------------------------INICIO ITEMDIETA------------------------------------------------------------------------
    Route::get('/dieta/refeicoes/{id}/{diasemana}', ['as' => 'site.dieta.refeicoes', 'uses' =>'site\ItemDietaController@index']);
    Route::get('/dieta/refeicoes/adicionar/{id}/{diasemana}', ['as' => 'site.dieta.refeicoes.adicionar', 'uses' =>'site\ItemDietaController@adicionar']);
    Route::post('/dieta/refeicoes/salvar', ['as' => 'site.dieta.refeicoes.salvar', 'uses' =>'site\ItemDietaController@salvar']);
    Route::get('/dieta/refeicoes/editar/{id}', ['as' => 'site.dieta.refeicoes.editar', 'uses' =>'site\ItemDietaController@editar']);
    Route::post('/dieta/refeicoes/atualizar/{id}', ['as' => 'site.dieta.refeicoes.atualizar', 'uses' =>'site\ItemDietaController@atualizar']);
    Route::get('/dieta/refeicoes/deletar/{id}', ['as' => 'site.dieta.refeicoes.deletar', 'uses' =>'site\ItemDietaController@deletar']);
    //------------------------------------------------------FIM ITEMDIETA------------------------------------------------------------------------

});

Route::group(['middleware'=>'auth-painel'], function(){
    Route::get('/admin/principal',['as'=>'admin.principal', function () {
        return view('admin.site');
    }]);
    Route::get('/admin/sair',['as'=>'admin.sair', 'uses'=>'UsuarioController@sairAdmin']);
    //------------------------------------------------------INICIO USUÁRIO-------------------------------------------------------------------------
    Route::get('admin/usuarios', ['as' => 'admin.usuarios', 'uses' =>'UsuarioController@index']);
    Route::get('admin/usuario/adicionar', ['as' => 'admin.usuario.adicionar', 'uses' =>'UsuarioController@adicionar']);
    Route::get('admin/usuario/permissoes/{id}', ['as' => 'admin.usuario.permissoes', 'uses' =>'UsuarioController@permissoes']);
    Route::post('admin/usuario/permissoes/salvar/{id}', ['as' => 'admin.usuario.permissoes.salvar', 'uses' =>'UsuarioController@permissoessalvar']);
    Route::get('admin/usuario/permissoes/remover/{id}', ['as' => 'admin.usuario.permissoes.remover', 'uses' =>'UsuarioController@permissoesremover']);
    Route::post('admin/usuario/salvar', ['as' => 'admin.usuario.salvar', 'uses' =>'UsuarioController@salvar']);
    Route::get('admin/usuario/editar/{id}', ['as' => 'admin.usuario.editar', 'uses' =>'UsuarioController@editar']);
    Route::get('admin/usuario/deletar/{id}', ['as' => 'admin.usuario.deletar', 'uses' =>'UsuarioController@deletar']);
    Route::post('admin/usuario/atualizar/{id}', ['as' => 'admin.usuario.atualizar', 'uses' =>'UsuarioController@atualizar']);
//------------------------------------------------------FIM USUÁRIO----------------------------------------------------------------------------
});
//------------------------------------------------------FIM LOGADO---------------------------------------------------------------------------