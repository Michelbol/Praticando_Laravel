@extends('layouts.app')

@section('content')
    <h2 class="center">Editar Dieta</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb">Editar Dieta</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <form class="col s12" action="{{route('site.dieta.atualizar', $dietas->id)}}" method="post">
            {{csrf_field()}}
            @include('site.dieta._form')
            <button class="waves-effect waves-light btn">Alterar</button>
        </form>
    </div>
@endsection