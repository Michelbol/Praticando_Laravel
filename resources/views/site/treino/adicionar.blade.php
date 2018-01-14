@extends('layouts.site.app')

@section('content')
    <h2 class="center">Adicionar Treino</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.treinos')}}">Lista de Treinos</a>
                    <a class="breadcrumb">Adicionar Treino</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('site.treino.salvar')}}" method="post">
            {{csrf_field()}}
            @include('site.treino._form')
            <button class="btn blue">Adicionar</button>
        </form>
    </div>
@endsection