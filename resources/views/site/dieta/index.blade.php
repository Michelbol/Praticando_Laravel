@extends('layouts.site.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="center">Lista Dietas</h2>
            <div class="row">
                <nav>
                    <div class="nav-wrapper blue darken-1">
                        <div class="col s12">
                            <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                            <a class="breadcrumb">Lista de Dietas</a>
                        </div>
                    </div>
                </nav>
            </div>
                <a class="waves-effect waves-light btn right" href="{{route('site.dieta.adicionar')}}" {{Auth::user()->can('Dietas\Adicionar') ? '' : 'disabled'}}>Adicionar</a>
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->nome}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.dieta.editar', $registro->id)}}}" {{Auth::user()->can('Dietas\Editar') ? '' : 'disabled'}}>Editar</a>
                            <a class="waves-effect waves-light btn orange darken-3" href="{{route('site.dieta.refeicao', $registro->id)}}}" {{Auth::user()->can('Dietas\Refeicoes') ? '' : 'disabled'}}>Refeições</a>

                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.dieta.deletar', $registro->id)}}'}" {{Auth::user()->can('Dietas\Deletar') ? '' : 'disabled'}}>Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection