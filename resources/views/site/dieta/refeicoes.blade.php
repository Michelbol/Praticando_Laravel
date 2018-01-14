@extends('layouts.site.app')

@section('content')
    <h2 class="center">Editar Dieta</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb">Refeições Dieta</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <h3>Escolha um dia da semana:</h3>
        <div class="row center-align">
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "segunda"])}}">Segunda</a>
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "terça"])}}">Terça</a>
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "quarta"])}}">Quarta</a>
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "quinta"])}}">Quinta</a>
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "sexta"])}}">Sexta</a>
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "sabado"])}}">Sabado</a>
            <a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "domingo"])}}">Domingo</a>
        </div>
    </div>
@endsection