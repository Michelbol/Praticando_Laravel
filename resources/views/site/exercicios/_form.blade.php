    <div class="row">
        <div class="input-field col s12">
            <input placeholder="Digite o nome do treino.." id="nome" name="nome" type="text" class="validate" value="{{isset($exercicios->nome) ? $exercicios->nome : ''}}">
            <label for="first_name">Nome Exercício</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input placeholder="Digite o musculo.." id="musculo" name="musculo" type="text" class="validate" value="{{isset($exercicios->musculo) ? $exercicios->musculo : ''}}">
            <label for="endereco">Músculo</label>
        </div>
    </div>
