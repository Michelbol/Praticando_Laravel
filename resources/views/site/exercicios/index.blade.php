@extends('layouts.site.app')

@section('content')
    <div class="container">
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
                <a class="waves-effect waves-light btn right" href="{{route('site.exercicio.adicionar')}}" {{Auth::user()->can('Exercicios\Adicionar') ? '' : 'disabled'}}>Adicionar</a>
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Músculo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exercicios as $exercicio)
                    <tr>
                        <td>{{$exercicio->nome}}</td>
                        <td>{{$exercicio->musculo}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.exercicio.editar', $exercicio)}}}" {{Auth::user()->can('Exercicios\Editar') ? '' : 'disabled'}}>Editar</a>

                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.exercicio.deletar', $exercicio->id)}}'}" {{Auth::user()->can('Exercicios\Deletar') ? '' : 'disabled'}}>Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection