
<!-- Custom styling plus plugins -->
<link href="/assets/gentelella-master/production/css/custom.css" rel="stylesheet">
<link href="/assets/gentelella-master/production/css/icheck/flat/green.css" rel="stylesheet">
<!-- editor -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<link href="/assets/gentelella-master/production/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
<link href="/assets/gentelella-master/production/css/editor/index.css" rel="stylesheet">
<!-- select2 -->
<link href="/assets/gentelella-master/production/css/select/select2.min.css" rel="stylesheet">
<!-- switchery -->
<link rel="stylesheet" href="/assets/gentelella-master/production/css/switchery/switchery.min.css" />
<form method="POST" >
    <center>
        Seja bem vindo <b><?php echo $_SESSION[@usuario]; ?></b> a Tela de Cadastro de novo usuários.
        <fieldset>
            <table width="50%" border="0" cellpadding="10">
                <tr>
                    <td align="right">Nome Completo:</td>
                    <td width="79%"><label for="nome" ></label>
                        <input class="nome" name="nome" type="text" id="nome" size="50" maxlength="100" /></td>
                </tr>
                <tr>
                    <td align="right">Usuário:</td>
                    <td><label for="email"></label>
                        <input class="user" name="user" type="text" id="user" size="50" maxlength="100" /></td>
                </tr>
                <tr>
                    <td align="right">Senha Padrão: </td>
                    <td><label for="senha"></label>
                        <input class="senha" name="senha" type="text" id="senha" size="50" maxlength="50" /></td>
                </tr>
                <tr>
                    <td align="right">Email:</td>
                    <td><label for="email"></label>
                        <input class="email" name="email" type="text" id="email" size="50" maxlength="100" /></td>
                </tr>
                <tr>
                    <td align="right">Cargo:</td>
                    <td><label for="cargo"></label>
                        <select name="cargo" id="cargo" class="cargo">
                            <option value="1" selected="">Estagiário</option>
                            <option value="2">Montador</option>
                            <option value="3">Técnico</option>
                            <option value="5">Gestor</option>
                            <option value="6">Staff</option>
                            <option value="7">Consulta</option>
                            <option value="8">Coordenador</option>
                            <option value="100">Administrador</option>
                        </select></td>
                </tr>
                <tr>
                    <td align="right">Status:</td>
                    <td><select class="status" name="status" id="status">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><label for="email">* Todos os campos são obrigatórios</label></td>
                </tr>
                <tr>
                    <td><hr /></td>
                    <td><hr /></td>
                </tr>
                <tr>
                    <td><input type="button" value="Home" onclick="location.href = '/'"></td>
                    <td><input type="reset" name="Limpar" id="Limpar" value="Limpar" />
                        <input type="button" value="Home" onclick="location.href = '/'">
                        <input type="submit" name="submit" id="submit" value="Enviar" /></td>
                </tr>
            </table>
        </fieldset>
    </center>
</form>
