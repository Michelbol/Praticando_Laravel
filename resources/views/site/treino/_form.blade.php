    <div class="row">
        <div class="input-field col s12">
            <input placeholder="Digite o nome do treino.." id="nome" name="nome" type="text" class="validate" value="{{isset($treino->nome) ? $treino->nome : ''}}">
            <label for="first_name">Nome Treino</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input placeholder="Digite a descricao.." id="descricao" name="descricao" type="text" class="validate" value="{{isset($treino->descricao) ? $treino->descricao : ''}}">
            <label for="endereco">Descrição</label>
        </div>
    </div>