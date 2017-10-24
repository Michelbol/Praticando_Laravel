<div class="row">
    <div class="input-field col s12">
        <input placeholder="Digite o nome completo.." id="nome" name="nome" type="text" class="validate" value="{{isset($aluno->nome) ? $aluno->nome : ''}}">
        <label for="first_name">Nome Completo</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <input placeholder="Digite o Endereço.." id="endereco" name="endereco" type="text" class="validate" value="{{isset($aluno->endereco) ? $aluno->endereco : ''}}">
        <label for="endereco">Endereço</label>
    </div>
    <div class="input-field col s6">
        <input placeholder="Digite o Bairro.." id="bairro" name="bairro" type="text" class="validate" value="{{isset($aluno->bairro) ? $aluno->bairro : ''}}">
        <label for="bairro">Bairro</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="email" type="email" name="email" class="validate" value="{{isset($aluno->email) ? $aluno->email : ''}}">
        <label for="email">Email</label>
    </div>
</div>