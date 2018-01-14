@extends('layouts.site.app')

@section('content')
    <h2 class="center">Editar Dieta</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb" href="{{route('site.dieta.editar', $registro->id)}}">Editar Dieta</a>
                    <a class="breadcrumb" href="{{route('site.dieta.refeicoes', [$registro->id, $diasemana])}}">Lista de Refeições</a>
                    <a class="breadcrumb">Editar Refeição</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('site.dieta.refeicoes.atualizar', $dietas->id)}}" method="post">
            {{csrf_field()}}
            <button class="waves-effect waves-light btn right">Alterar</button>
            @include('site.dieta.itemdieta._form')
        </form>
    </div>
@endsection