@extends('layouts.app')

@section('content')
    <h2 class="center">Adicionar Exercício</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.exercicios')}}">Lista de Exercicios</a>
                    <a class="breadcrumb">Adicionar Exercicios</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <form class="col s12" action="{{route('site.exercicio.salvar')}}" method="post">
            {{csrf_field()}}
            @include('site.exercicios._form')
            <button class="btn blue">Adicionar</button>
        </form>
    </div>
@endsection