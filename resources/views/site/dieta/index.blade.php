@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="center">Lista Dietas</h2>
            <div class="row">
                <nav>
                    <div class="nav-wrapper blue darken-1">
                        <div class="col s12">
                            <a class="breadcrumb">Lista de Dietas</a>
                        </div>
                    </div>
                </nav>
            </div>
                <a class="waves-effect waves-light btn right" href="{{route('site.dieta.adicionar')}}">Adicionar</a>
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->nome}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.dieta.editar', $registro)}}}">Editar</a>

                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.dieta.deletar', $registro->id)}}'}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection