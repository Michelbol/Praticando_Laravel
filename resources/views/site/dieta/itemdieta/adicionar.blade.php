@extends('layouts.site.app')

@section('content')
    <h2 class="center">Adicionar Dieta</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb" href="{{route('site.dieta.editar', $registro->id)}}">Editar Dieta</a>
                    <a class="breadcrumb" href="{{route('site.dieta.refeicoes', [$registro->id, $diasemana])}}">Lista de Refeições</a>
                    <a class="breadcrumb">Adicionar Refeição</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <form class="col s12" action="{{route('site.dieta.refeicoes.salvar')}}" method="post">
            <button class="btn blue">Adicionar</button>
            {{csrf_field()}}
            @include('site.dieta.itemdieta._form')
        </form>
    </div>
@endsection