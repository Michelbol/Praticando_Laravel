@extends('layouts.site.app')

@section('content')

    <div class="row">
        <div class="container">
            <h2>Entrar</h2>
            <form action="{{ route('site.login') }}" method="post">
                {{csrf_field()}}
                @include('site.login._form')
                <button class="btn blue">Entrar</button>
            </form>
        </div>
    </div>
@endsection