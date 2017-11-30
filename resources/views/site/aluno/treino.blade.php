@extends('layouts.app')

@section('content')
    <h2 class="center">Lista de Treinos para {{$aluno->nome}}</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.alunos')}}">Lista de Alunos</a>
                    <a class="breadcrumb">Lista de Treinos</a>
                </div>
            </div>
        </nav>
    </div>
        <div class="row container">
            <form action="{{route('site.aluno.treino.salvar', $aluno->id)}}" method="post">
                {{csrf_field()}}
                <div class="input-field col s12">
                    <select name="treino_id">
                        <option disabled selected>Escolha o Treino</option>
                        @foreach($treinos as $treino)
                            <option value="{{$treino->id}}">{{$treino->nome}}</option>
                        @endforeach
                    </select>
                    <label>Treinos Disponíveis</label>
                </div>
                <div class="row col 12">
                    <button class="waves-effect waves-light btn">Adicionar</button>
                </div>
            </form>
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
                </thead>
                <tbody>
                @foreach($aluno->treinos as $treino)
                    <tr>
                        <td>{{$treino->nome}}</td>
                        <td>{{$treino->descricao}}</td>
                        <td>
                            <a class="waves-effect waves-light btn red" href="{{route('site.aluno.treino.exercicio', [$treino->id, $aluno->id]) }}">Exercícios</a>
                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Remover esse registro?')){
                    window.location.href='{{route('site.aluno.treino.deletar', [$aluno->id, $treino->id])}}'}">Remover</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection