@extends('layouts.site.app')

@section('content')
    <h2 class="center">Adicionar Usuário</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('admin.principal')}}">Home</a>
                    <a class="breadcrumb" href="{{route('admin.usuarios')}}">Lista de Usuários</a>
                    <a class="breadcrumb">Adicionar Usuário</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('admin.usuario.salvar')}}" method="post">
            {{csrf_field()}}
            @include('admin.usuarios._form')
            <button class="btn blue">Adicionar</button>
        </form>
    </div>
@endsection