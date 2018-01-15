<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a class="brand-logo" href="{{ route('admin.principal') }}">Painel Administrativo</a>
            <ul class="right hide-on-med-and-down">
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">
                            {{Auth::user()->name}}
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('site.alunos')}}">Aluno</a></li>
                        <li><a href="{{route('site.treinos')}}">Treino</a></li>
                        <li><a href="{{route('site.exercicios')}}">Exercícios</a></li>
                        <li><a href="{{route('site.dietas')}}">Dietas</a></li>
                    </ul>
                <li><a href="{{route('admin.sair')}}">Sair</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>