@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="center">Lista de Alunos</h2>
            <div class="row">
                <nav>
                    <div class="nav-wrapper blue darken-1">
                        <div class="col s12">
                            <a class="breadcrumb">Lista de Alunos</a>
                        </div>
                    </div>
                </nav>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Endereco</th>
                    <th>Bairro</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->endereco}}</td>
                        <td>{{$aluno->bairro}}</td>
                        <td>{{$aluno->email}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.aluno.editar', $aluno)}}}">Editar</a>
                            <a class="waves-effect waves-light btn green" href="{{route('site.aluno.treino', $aluno)}}}">Treinos</a>
                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.aluno.deletar', $aluno->id)}}'}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="waves-effect waves-light btn" href="{{route('site.aluno.adicionar')}}">Adicionar</a>
        </div>
    </div>


@endsection