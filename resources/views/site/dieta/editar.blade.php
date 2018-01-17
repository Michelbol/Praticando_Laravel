@extends('layouts.site.app')

@section('content')
    <h2 class="center">Editar Dieta</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb">Editar Dieta</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('site.dieta.atualizar', $dietas->id)}}" method="post">
            {{csrf_field()}}
            @include('site.dieta._form')
            <button class="waves-effect waves-light btn left">Salvar Alterações</button>
        </form>
        {{--<div class="row">--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "segunda"])}}">Segunda</a>--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "terça"])}}">Terça</a>--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "quarta"])}}">Quarta</a>--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "quinta"])}}">Quinta</a>--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "sexta"])}}">Sexta</a>--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "sabado"])}}">Sabado</a>--}}
            {{--<a class="waves-effect waves-light btn" href="{{route('site.dieta.refeicoes', [$dietas->id, "domingo"])}}">Domingo</a>--}}
        {{--</div>--}}
    </div>
@endsection