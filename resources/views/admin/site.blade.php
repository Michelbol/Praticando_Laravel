@extends('layouts.site.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Usuários</span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('admin.usuarios')}}">Clique aqui</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection