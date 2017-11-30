@extends('layouts.app')

@section('content')
    <h2 class="center">Editar Exercícios</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.exercicios')}}">Lista de Exercícios</a>
                    <a class="breadcrumb">Editar Exercício</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('site.exercicio.atualizar', $exercicios->id)}}" method="post">
            {{csrf_field()}}
            @include('site.exercicios._form')
            <button class="waves-effect waves-light btn">Alterar</button>
        </form>
    </div>
@endsection