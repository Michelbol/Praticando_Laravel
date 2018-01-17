<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col 16 s4">
                <h5 class="white-text">Gerenciado de Treino</h5>
                <p>Otimizando seu treino</p>
            </div>
            <div class="col l3 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="{{route('site.principal')}}">Site</a></li>
                    @can('Painel Administrativo')
                    <li><a class="grey-text text-lighten-3" href="{{route('admin.principal')}}">Painel Administrativo</a></li>
                    @endcan
                </ul>
            </div>
            @if(!Auth::guest())
            <div class="col 14 s3">
                <h5 class="white-text">Menu</h5>
                <ul>
                    @can('Alunos')
                    <li><a class="grey-text text-lighten-3" href="{{route('site.alunos')}}">Aluno</a></li>
                    @endcan
                    @can('Treinos')
                    <li><a class="grey-text text-lighten-3" href="{{route('site.treinos')}}">Treino</a></li>
                    @endcan
                    @can('Exercicios')
                    <li><a class="grey-text text-lighten-3" href="{{route('site.exercicios')}}">Exercícios</a></li>
                    @endcan
                    @can('Dietas')
                    <li><a class="grey-text text-lighten-3" href="{{route('site.dietas')}}">Dietas</a></li>
                    @endcan
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright
            <a class="grey-text text-lighten-4 right">MichelBolzon</a>
        </div>
    </div>
</footer>