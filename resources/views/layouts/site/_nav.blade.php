<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a class="brand-logo" href="{{ route('site.principal') }}">Gerenciador Treino</a>
            <ul class="right hide-on-med-and-down">
                @if(Auth::guest())
                    <li><a href="{{ route('site.login') }}">Login</a></li>
                @else
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">
                            {{Auth::user()->name}}
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="{{route('site.principal')}}">Início</a></li>
                        @can('Alunos')
                        <li><a href="{{route('site.alunos')}}">Aluno</a></li>
                        @endcan
                        @can('Treinos')
                        <li><a href="{{route('site.treinos')}}">Treino</a></li>
                        @endcan
                        @can('Exercicios')
                        <li><a href="{{route('site.exercicios')}}">Exercícios</a></li>
                        @endcan
                        @can('Dietas')
                        <li><a href="{{route('site.dietas')}}">Dietas</a></li>
                        @endcan
                    </ul>
                <li><a href="{{route('site.sair')}}">Sair</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>