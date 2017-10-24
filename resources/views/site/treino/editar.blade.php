@extends('layouts.app')

@section('content')
    <h2 class="center">Editar Treino</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.treino')}}">Lista de Treinos</a>
                    <a class="breadcrumb">Editar Treino</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <form class="col s12" action="{{route('site.treino.atualizar', $treino->id)}}" method="post">
            {{csrf_field()}}
            @include('site.treino._form')
            <button class="waves-effect waves-light btn">Alterar</button>
        </form>
    </div>
@endsection