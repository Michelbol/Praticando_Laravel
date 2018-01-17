@extends('layouts.site.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="center">Lista de Alunos</h2>
            <div class="row">
                <nav>
                    <div class="nav-wrapper blue darken-1">
                        <div class="col s12">
                            <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                            <a class="breadcrumb">Lista de Alunos</a>
                        </div>
                    </div>
                </nav>
            </div>
                <a class="waves-effect waves-light btn right" href="{{route('site.aluno.adicionar')}}" {{Auth::user()->can('Alunos\Adicionar') ? '' : 'disabled'}}>Adicionar</a>
            <table>
                <thead>
                <tr>
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
                        <td>{{str_limit($aluno->nome, 15)}}</td>
                        <td>{{str_limit($aluno->endereco,15)}}</td>
                        <td>{{str_limit($aluno->bairro,15)}}</td>
                        <td>{{str_limit($aluno->email,15)}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.aluno.editar', $aluno)}}}" {{Auth::user()->can('Alunos\Editar') ? '' : 'disabled'}}>Editar</a>
                            <a class="waves-effect waves-light btn green" href="{{route('site.aluno.treino', $aluno)}}}" {{Auth::user()->can('Alunos\Treinos') ? '' : 'disabled'}}>Treinos</a>
                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.aluno.deletar', $aluno->id)}}'}" {{Auth::user()->can('Alunos\Deletar') ? '' : 'disabled'}}>Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection