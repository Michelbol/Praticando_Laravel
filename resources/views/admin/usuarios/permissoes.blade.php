@extends('layouts.site.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="center">Lista de Permissões - Usuário: {{ $user->name }}</h2>
            <div class="row">
                <nav>
                    <div class="nav-wrapper blue darken-1">
                        <div class="col s12">
                            <a class="breadcrumb" href="{{route('admin.usuarios')}}">Lista de Usuários</a>
                            <a class="breadcrumb">Lista de Permissões</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="{{route('admin.usuario.permissoes.salvar', [$user->id])}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <button class="waves-effect waves-light btn left">Salvar</button>
            </div>
            <div class="row">
                @if($user->email == 'admin')
                    <span>O usuário admin possui todas as permissões!!</span>
                @else
                    @foreach($permissoes as $permissao)
                        <p>
                            <input type="checkbox" class="filled-in" id="permissao{{$permissao->id}}" name="{{$permissao->id}}" {{ $user->permissaos->contains('nome', $permissao->nome) ? 'checked="checked"' : '' }} />
                            <label for="permissao{{$permissao->id}}">{{$permissao->nome}}</label>
                        </p>
                    @endforeach
                @endif
            </div>
        </form>
    </div>



@endsection