@extends('layouts.site.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Alunos</span>
                    </div>
                    <div class="card-action">
                        <a href="{{Auth::user()->can('Alunos\Adicionar') ? route('site.alunos') : ''}}" class="disabled">Clique aqui</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card green darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Treinos</span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('site.treinos')}}">Clique aqui</a>
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
                        <a href="{{route('site.exercicios')}}">Clique aqui</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card orange darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Dietas</span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('site.dietas')}}">Clique aqui</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection