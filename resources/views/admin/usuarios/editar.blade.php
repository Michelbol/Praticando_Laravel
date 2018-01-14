@extends('layouts.site.app')

@section('content')
    <h2 class="center">Editar Usuário</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('admin.usuarios')}}">Lista de Usuários</a>
                    <a class="breadcrumb">Editar Usuário</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('admin.usuario.atualizar', $usuario->id)}}" method="post">
            {{csrf_field()}}
            @include('admin.usuarios._form')
            <button class="waves-effect waves-light btn">Alterar</button>
        </form>
    </div>
@endsection