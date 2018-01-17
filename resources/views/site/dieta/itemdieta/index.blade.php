@extends('layouts.site.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="center">Refeições para {{$diasemana}}</h2>
            <div class="row">
                <nav>
                    <div class="nav-wrapper blue darken-1">
                        <div class="col s12">
                            <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                            <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                            <a class="breadcrumb" href="{{route('site.dieta.refeicao', $registro->id)}}">Refeição Dieta</a>
                            <a class="breadcrumb">Lista de Refeições</a>
                        </div>
                    </div>
                </nav>
            </div>
                <a class="waves-effect waves-light btn right" href="{{route('site.dieta.refeicoes.adicionar', [$registro->id, $diasemana])}}" {{Auth::user()->can('Dietas\Refeicoes\Adicionar') ? '' : 'disabled'}}>Adicionar</a>
            <table>
                <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Horário</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($itemdieta as $item)
                    <tr>
                        <td>{{str_limit($item->descricao, 90)}}</td>
                        <td>{{$item->horario}}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes.editar', [$item->id, $diasemana])}}" {{Auth::user()->can('Dietas\Refeicoes\Editar') ? '' : 'disabled'}}>Editar</a>

                            <a class="waves-effect waves-light btn blue darken-1" href="javascript: if(confirm('Deletar esse registro?')){
                    window.location.href='{{route('site.dieta.refeicoes.deletar', [$item->id])}}'}" {{Auth::user()->can('Dietas\Refeicoes\Deletar') ? '' : 'disabled'}}>Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection