@extends('layouts.site.app')

@section('content')
    <h2 class="center">Editar Dieta</h2>
    <div class="row container">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="col s12">
                    <a class="breadcrumb" href="{{route('site.principal')}}">Home</a>
                    <a class="breadcrumb" href="{{route('site.dietas')}}">Lista de Dietas</a>
                    <a class="breadcrumb" href="{{route('site.dieta.refeicao', $itemdieta->dieta_id)}}">Refeição Dieta</a>
                    <a class="breadcrumb" href="{{route('site.dieta.refeicoes', [$itemdieta->id, $itemdieta->diasemana])}}">Lista de Refeições</a>
                    <a class="breadcrumb">Editar Refeição</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row container">
        <form class="col s12" action="{{route('site.dieta.refeicoes.atualizar', $itemdieta->id)}}" method="post">
            {{csrf_field()}}
            <button class="waves-effect waves-light btn right">Alterar</button>
            @include('site.dieta.itemdieta._form')
        </form>
    </div>
@endsection
@section('script')
    <script>
        $('.timepicker').pickatime({
            default: 'now', // Set default time: 'now', '1:30AM', '16:30'
            fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
            twelvehour: false, // Use AM/PM or 24-hour format
            donetext: 'OK', // text for done-button
            cleartext: 'Clear', // text for clear-button
            canceltext: 'Cancel', // Text for cancel-button
            autoclose: false, // automatic close timepicker
            ampmclickable: true, // make AM PM clickable
            aftershow: function(){} //Function for after opening timepicker
        });
    </script>
@endsection