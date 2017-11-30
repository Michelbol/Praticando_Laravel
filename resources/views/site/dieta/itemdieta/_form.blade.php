<input id="diasemana" name="diasemana" hidden value="{{$diasemana}}">
<input id="dieta_id" name="dieta_id" hidden value="{{$registro->id}}">
    <div class="row">
        <div class="input-field col s12">
            <label for="first_name">Descrição Refeição</label>
            <textarea placeholder="Digite a descrição da dieta.." id="descricao" name="descricao" cols="30" rows="10" class="materialize-textarea" value="{{isset($itemdieta->descricao) ? $itemdieta->descricao : ''}}"></textarea>
        </div>
        <div class="input-field col s12">
            <input placeholder="Digite o horario.." id="horario" name="horario" type="text" class="validate" value="{{isset($itemdieta->horario) ? $itemdieta->horario : ''}}">
            <label for="first_name">Horario Dieta</label>
        </div>
    </div>