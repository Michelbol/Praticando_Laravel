@extends('layouts.app')

@section('content')
    <h2 class="center">Editar Aluno</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.aluno')}}">Lista de Alunos</a>
                    <a class="breadcrumb">Editar Aluno</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <form class="col s12" action="{{route('site.aluno.atualizar', $aluno->id)}}" method="post">
            {{csrf_field()}}
            @include('site.aluno._form')
            <button class="waves-effect waves-light btn">Alterar</button>
        </form>
    </div>
@endsection