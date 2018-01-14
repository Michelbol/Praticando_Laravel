@extends('layouts.site.app')

@section('content')
    <h2 class="center">Adicionar Dieta</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb">Adicionar Dietas</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <form class="col s12" action="{{route('site.dieta.salvar')}}" method="post">
            {{csrf_field()}}
            @include('site.dieta._form')
            <button class="btn blue">Adicionar</button>
        </form>
    </div>
@endsection