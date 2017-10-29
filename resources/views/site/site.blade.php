@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Aluno</span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('site.aluno')}}">Clique aqui</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card green darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Treino</span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('site.treino')}}">Clique aqui</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <div class="card red darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Exercícios</span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('site.exercicio')}}">Clique aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection