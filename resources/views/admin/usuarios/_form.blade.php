<div class="row">
    <div class="input-field col s12">
        <input placeholder="Digite o nome do usuário.." id="nome" name="nome" type="text" class="validate" value="{{isset($usuario->name) ? $usuario->name : ''}}">
        <label for="nome">Nome Usuário</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <input placeholder="Digite o Email.." id="email" name="email" type="text" class="validate" value="{{isset($usuario->email) ? $usuario->email : ''}}">
        <label for="email">E-mail</label>
    </div>
    <div class="input-field col s6">
        <input placeholder="Digite a nova senha.." id="password" name="password" type="password" class="validate">
        <label for="password">Senha</label>
    </div>
</div>