@extends('layouts.site.app')

@section('content')
    <h2 class="center">Lista de Exercicios para {{$treino->nome}}</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                    <a class="breadcrumb" href="{{route('site.alunos')}}">Lista de Alunos</a>
                    <a class="breadcrumb" href="{{route('site.aluno.treino', $id_aluno)}}">Lista de Treinos</a>
                    <a class="breadcrumb" >Lista de Exercícios</a>
                </div>
            </div>
        </nav>
    </div>
        <div class="row container">
            <form action="{{route('site.aluno.treino.exercicio.salvar', $treino->id)}}" method="post">
                {{csrf_field()}}
                <div class="input-field col s12">
                    <select name="exercicio_id">
                        <option disabled selected>Escolha o Exercício</option>
                        @foreach($exercicios as $exercicio)
                            <option value="{{$exercicio->id}}">{{$exercicio->nome}}</option>
                        @endforeach
                    </select>
                    <label>Exercicios Disponíveis</label>
                </div>
                <div class="row col 12">
                    <button class="waves-effect waves-light btn" {{Auth::user()->can('Alunos\Treinos\Exercicios\Adicionar') ? '' : 'disabled'}}>Adicionar</button>
                </div>
            </form>
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Músculo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($treino->exercicios as $exercicio)
                    <tr>
                        <td>{{$exercicio->id}}</td>
                        <td>{{$exercicio->nome}}</td>
                        <td>{{$exercicio->musculo}}</td>
                        <td><a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Remover esse registro?')){
                    window.location.href='{{route('site.aluno.treino.exercicio.deletar', [$treino->id, $exercicio->id])}}'}" {{Auth::user()->can('Alunos\Treinos\Exercicios\Remover') ? '' : 'disabled'}}>Remover</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection