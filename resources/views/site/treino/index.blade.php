@extends('layouts.site.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Treinos</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-1">
                    <div class="col s12">
                        <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                        <a class="breadcrumb">Lista de Treinos</a>
                    </div>
                </div>
            </nav>
        </div>
            <a class="waves-effect waves-light btn right" href="{{route('site.treino.adicionar')}}" {{Auth::user()->can('Treinos\Adicionar') ? '' : 'disabled'}}>Adicionar</a>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($treinos as $treino)
                    <tr>
                        <td>{{str_limit($treino->nome, 20)}}</td>
                        <td>{{str_limit($treino->descricao, 50)}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.treino.editar', $treino)}}}" {{Auth::user()->can('Treinos\Editar') ? '' : 'disabled'}}>Editar</a>
                            <a class="waves-effect waves-light btn red" href="{{route('site.treino.exercicio', $treino)}}}" {{Auth::user()->can('Treinos\Exercicios') ? '' : 'disabled'}}>Exercícios</a>
                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.treino.deletar', $treino->id)}}'}" {{Auth::user()->can('Treinos\Deletar') ? '' : 'disabled'}}>Deletar</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection