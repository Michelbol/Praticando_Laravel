@extends('layouts.app')

@section('content')
<div class="row">
    <h2 class="center">Lista Exercícios</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb">Lista de Exercícios</a>
                </div>
            </div>
        </nav>
    </div>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Músculo</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($exercicios as $exercicio)
            <tr>
                <td>{{$exercicio->id}}</td>
                <td>{{$exercicio->nome}}</td>
                <td>{{$exercicio->musculo}}</td>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('site.exercicio.editar', $exercicio)}}}">Editar</a>

                    <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.exercicio.deletar', $exercicio->id)}}'}">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <div class="row">
        <a class="waves-effect waves-light btn" href="{{route('site.exercicio.adicionar')}}">Adicionar</a>
    </div>
@endsection