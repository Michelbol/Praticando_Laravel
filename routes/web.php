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

//------------------------------------------------------INICIO SITE------------------------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){

    Route::get('/site/sair',['as'=>'site.sair', 'uses'=>'UsuarioController@sair']);

    Route::get('/principal',['as'=>'site.principal', function () {
        return view('site.site');
    }]);
//------------------------------------------------------INICIO ALUNO-------------------------------------------------------------------------
    Route::get('/alunos', ['as' => 'site.alunos', 'uses' =>'site\AlunoController@index'])->middleware('can:Alunos');
    Route::get('/aluno/adicionar', ['as' => 'site.aluno.adicionar', 'uses' =>'site\AlunoController@adicionar'])->middleware('can:Alunos\Adicionar');
    Route::post('/aluno/salvar', ['as' => 'site.aluno.salvar', 'uses' =>'site\AlunoController@salvar'])->middleware('can:Alunos\Adicionar');
    Route::get('/aluno/editar/{id}', ['as' => 'site.aluno.editar', 'uses' =>'site\AlunoController@editar'])->middleware('can:Alunos\Editar');
    Route::get('/aluno/deletar/{id}', ['as' => 'site.aluno.deletar', 'uses' =>'site\AlunoController@deletar'])->middleware('can:Alunos\Deletar');
    Route::post('/aluno/atualizar/{id}', ['as' => 'site.aluno.atualizar', 'uses' =>'site\AlunoController@atualizar'])->middleware('can:Alunos\Editar');
//------------------------------------------------------FIM ALUNO----------------------------------------------------------------------------
//------------------------------------------------------INICIO ALUNO/TREINO------------------------------------------------------------------
    Route::get('/aluno/treino/{id}', ['as' => 'site.aluno.treino', 'uses' =>'site\AlunoController@treino'])->middleware('can:Alunos\Treinos');

    Route::post('/aluno/treino/salvar/{id}', ['as' => 'site.aluno.treino.salvar', 'uses' =>'site\AlunoController@salvarTreino'])->middleware('can:Alunos\Treinos\Adicionar');

    Route::get('/aluno/treino/deletar/{aluno_id}/{treino_id}', ['as' => 'site.aluno.treino.deletar', 'uses' =>'site\AlunoController@deletarTreino'])->middleware('can:Alunos\Treinos\Remover');

                    //----------------------TREINO/EXERCICIOS-------------------//
    Route::get('/aluno/treino/exercicios/{id_treino}/{id_exercicio}', ['as' => 'site.aluno.treino.exercicio', 'uses' =>'site\AlunoController@treinoExercicios'])->middleware('can:Alunos\Treinos\Exercicios');

    Route::post('/aluno/treino/exercicio/salvar/{id}', ['as' => 'site.aluno.treino.exercicio.salvar', 'uses' =>'site\AlunoController@salvarExercicio'])->middleware('can:Alunos\Treinos\Exercicios\Adicionar');

    Route::get('/aluno/treino/exercicio/deletar/{treino_id}/{exercicio_id}', ['as' => 'site.aluno.treino.exercicio.deletar', 'uses' =>'site\AlunoController@deletarExercicio'])->middleware('can:Alunos\Treinos\Exercicios\Remover');
                    //---------------------FIM TREINO/EXERCÍCIOS---------------//
//------------------------------------------------------FIM ALUNO/TREINO---------------------------------------------------------------------
//------------------------------------------------------INICIO TREINO------------------------------------------------------------------------
    Route::get('/treinos', ['as' => 'site.treinos', 'uses' =>'site\TreinoController@index'])->middleware('can:Treinos');
    Route::get('/treino/adicionar', ['as' => 'site.treino.adicionar', 'uses' =>'site\TreinoController@adicionar'])->middleware('can:Treinos\Adicionar');
    Route::post('/treino/salvar', ['as' => 'site.treino.salvar', 'uses' =>'site\TreinoController@salvar'])->middleware('can:Treinos\Adicionar');
    Route::get('/treino/editar/{id}', ['as' => 'site.treino.editar', 'uses' =>'site\TreinoController@editar'])->middleware('can:Treinos\Editar');
    Route::post('/treino/atualizar/{id}', ['as' => 'site.treino.atualizar', 'uses' =>'site\TreinoController@atualizar'])->middleware('can:Treinos\Editar');
    Route::get('/treino/deletar/{id}', ['as' => 'site.treino.deletar', 'uses' =>'site\TreinoController@deletar'])->middleware('can:Treinos\Deletar');
//------------------------------------------------------FIM TREINO----------------------------------------------------------------------------
//------------------------------------------------------INICIO TREINO/EXERCICIO---------------------------------------------------------------
    Route::get('/treino/exercicio/{id}', ['as' => 'site.treino.exercicio', 'uses' =>'site\TreinoController@exercicio'])->middleware('can:Treinos\Exercicios');
    Route::post('/treino/exercicio/salvar/{id}', ['as' => 'site.treino.exercicio.salvar', 'uses' =>'site\TreinoController@salvarExercicio'])->middleware('can:Treinos\Exercicios\Adicionar');
    Route::get('/treino/exercicio/deletar/{treino_id}/{exercicio_id}', ['as' => 'site.treino.exercicio.deletar', 'uses' =>'site\TreinoController@deletarExercicio'])->middleware('can:Treinos\Remover');
//------------------------------------------------------FIM TREINO/EXERCICIO------------------------------------------------------------------
//------------------------------------------------------INICIO EXERCICIO----------------------------------------------------------------------
    Route::get('/exercicios', ['as' => 'site.exercicios', 'uses' =>'site\ExercicioController@index'])->middleware('can:Exercicios');
    Route::get('/exercicio/adicionar', ['as' => 'site.exercicio.adicionar', 'uses' =>'site\ExercicioController@adicionar'])->middleware('can:Exercicios\Adicionar');
    Route::post('/exercicio/salvar', ['as' => 'site.exercicio.salvar', 'uses' =>'site\ExercicioController@salvar'])->middleware('can:Exercicios\Adicionar');
    Route::get('/exercicio/editar/{id}', ['as' => 'site.exercicio.editar', 'uses' =>'site\ExercicioController@editar'])->middleware('can:Exercicios\Editar');
    Route::post('/exercicio/atualizar/{id}', ['as' => 'site.exercicio.atualizar', 'uses' =>'site\ExercicioController@atualizar'])->middleware('can:Exercicios\Editar');
    Route::get('/exercicio/deletar/{id}', ['as' => 'site.exercicio.deletar', 'uses' =>'site\ExercicioController@deletar'])->middleware('can:Exercicios\Deletar');
//------------------------------------------------------FIM EXERCICIO------------------------------------------------------------------------
//------------------------------------------------------INICIO DIETA----------------------------------------------------------------------
    Route::get('/dietas', ['as' => 'site.dietas', 'uses' =>'site\DietaController@index'])->middleware('can:Dietas');
    Route::get('/dieta/adicionar', ['as' => 'site.dieta.adicionar', 'uses' =>'site\DietaController@adicionar'])->middleware('can:Dietas\Adicionar');
    Route::post('/dieta/salvar', ['as' => 'site.dieta.salvar', 'uses' =>'site\DietaController@salvar'])->middleware('can:Dietas\Adicionar');
    Route::get('/dieta/editar/{id}', ['as' => 'site.dieta.editar', 'uses' =>'site\DietaController@editar'])->middleware('can:Dietas\Editar');
    Route::get('/dieta/refeicao/{id}', ['as' => 'site.dieta.refeicao', 'uses' =>'site\DietaController@refeicao'])->middleware('can:Dietas\Refeicoes');
    Route::post('/dieta/atualizar/{id}', ['as' => 'site.dieta.atualizar', 'uses' =>'site\DietaController@atualizar'])->middleware('can:Dietas\Adicionar');
    Route::get('/dieta/deletar/{id}', ['as' => 'site.dieta.deletar', 'uses' =>'site\DietaController@deletar'])->middleware('can:Dietas\Deletar');
//------------------------------------------------------FIM DIETA------------------------------------------------------------------------
//------------------------------------------------------INICIO ITEMDIETA------------------------------------------------------------------------
    Route::get('/dieta/refeicoes/{id}/{diasemana}', ['as' => 'site.dieta.refeicoes', 'uses' =>'site\ItemDietaController@index'])->middleware('can:Dietas\Refeicoes');
    Route::get('/dieta/refeicoes/adicionar/{id}/{diasemana}', ['as' => 'site.dieta.refeicoes.adicionar', 'uses' =>'site\ItemDietaController@adicionar'])->middleware('can:Dietas\Refeicoes\Adicionar');
    Route::post('/dieta/refeicoes/salvar', ['as' => 'site.dieta.refeicoes.salvar', 'uses' =>'site\ItemDietaController@salvar'])->middleware('can:Dietas\Refeicoes\Adicionar');
    Route::get('/dieta/refeicao/editar/{id_itemdieta}', ['as' => 'site.dieta.refeicoes.editar', 'uses' =>'site\ItemDietaController@editar'])->middleware('can:Dietas\Refeicoes\Editar');
    Route::post('/dieta/refeicao/atualizar/{id}', ['as' => 'site.dieta.refeicoes.atualizar', 'uses' =>'site\ItemDietaController@atualizar'])->middleware('can:Dietas\Refeicoes\Editar');
    Route::get('/dieta/refeicao/deletar/{id}', ['as' => 'site.dieta.refeicoes.deletar', 'uses' =>'site\ItemDietaController@deletar'])->middleware('can:Dietas\Refeicoes\Deletar');
    //------------------------------------------------------FIM ITEMDIETA------------------------------------------------------------------------

});
//------------------------------------------------------FIM SITE---------------------------------------------------------------------------

//------------------------------------------------------INICIO PAINEL ADMINISTRATIVO---------------------------------------------------------------
Route::group(['middleware'=>'auth-painel'], function(){
    Route::get('/admin/principal',['as'=>'admin.principal', function () {
        return view('admin.site');
    }]);
    Route::get('/admin/sair',['as'=>'admin.sair', 'uses'=>'UsuarioController@sairAdmin']);
    //------------------------------------------------------INICIO USUÁRIO-----------------------------------------------------------------------
    Route::get('admin/usuarios', ['as' => 'admin.usuarios', 'uses' =>'UsuarioController@index']);
    Route::get('admin/usuario/adicionar', ['as' => 'admin.usuario.adicionar', 'uses' =>'UsuarioController@adicionar']);
    Route::get('admin/usuario/permissoes/{id}', ['as' => 'admin.usuario.permissoes', 'uses' =>'UsuarioController@permissoes']);
    Route::post('admin/usuario/permissoes/salvar/{id}', ['as' => 'admin.usuario.permissoes.salvar', 'uses' =>'UsuarioController@permissoessalvar']);
    Route::get('admin/usuario/permissoes/remover/{id}', ['as' => 'admin.usuario.permissoes.remover', 'uses' =>'UsuarioController@permissoesremover']);
    Route::post('admin/usuario/salvar', ['as' => 'admin.usuario.salvar', 'uses' =>'UsuarioController@salvar']);
    Route::get('admin/usuario/editar/{id}', ['as' => 'admin.usuario.editar', 'uses' =>'UsuarioController@editar']);
    Route::get('admin/usuario/deletar/{id}', ['as' => 'admin.usuario.deletar', 'uses' =>'UsuarioController@deletar']);
    Route::post('admin/usuario/atualizar/{id}', ['as' => 'admin.usuario.atualizar', 'uses' =>'UsuarioController@atualizar']);
//------------------------------------------------------FIM PAINEL ADMINISTRATIVO---------------------------------------------------------------

});