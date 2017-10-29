<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a class="brand-logo" href="{{ route('site.principal') }}">SisAdmin</a>
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
                        <li><a href="{{route('site.aluno')}}">Aluno</a></li>
                        <li><a href="{{route('site.treino')}}">Treino</a></li>
                        <li><a href="{{route('site.exercicio')}}">Exercícios</a></li>
                    </ul>
                <li><a href="{{route('site.sair')}}">Sair</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>