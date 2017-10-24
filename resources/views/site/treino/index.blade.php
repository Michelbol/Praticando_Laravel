@extends('layouts.app')

@section('content')
    <h2 class="center">Lista de Treinos</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb">Lista de Treinos</a>
                </div>
            </div>
        </nav>
    </div>
<div class="row">
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($treinos as $treino)
            <tr>
                <td>{{$treino->id}}</td>
                <td>{{str_limit($treino->nome)}}</td>
                <td>{{str_limit($treino->descricao, 70)}}</td>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('site.treino.editar', $treino)}}}">Editar</a>
                    <a class="waves-effect waves-light btn red" href="{{route('site.treino.exercicio', $treino)}}}">Exercícios</a>
                    <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.treino.deletar', $treino->id)}}'}">Deletar</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <div class="row">
        <a class="waves-effect waves-light btn" href="{{route('site.treino.adicionar')}}">Adicionar</a>
    </div>


@endsection