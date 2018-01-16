<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Gerenciado de Treino</h5>
                <p>Otimizando seu treino</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="{{route('site.principal')}}">Site</a></li>
                    @can('Painel Administrativo')
                    <li><a class="grey-text text-lighten-3" href="{{route('admin.principal')}}">Painel Administrativo</a></li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright
            <a class="grey-text text-lighten-4 right">MichelBolzon</a>
        </div>
    </div>
</footer>