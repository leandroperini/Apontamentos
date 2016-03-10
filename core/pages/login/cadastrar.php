
<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cadastro de Usuários</title>
</head>
<body>
    <center><h2>Bem vindo ao <strong>SGA</strong>, Sistema de Gerenciamento de Atividades!</h2></center>
    <form action="../../controller/AdminController.php" method="POST" >
        <center>
             Tela de Cadastro de novo usuários.
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
                          <option value="0" selected=""></option>
                          <option value="1">Estagiário</option>
                          <option value="7">Montador</option>
                          <option value="22">Técnico</option>
                          <option value="43">Gestor</option>
                          <option value="53">Staff</option>
                          <option value="6">Coordenador</option>
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
                      <td>&nbsp;</td>
                      <td><input type="reset" name="Limpar" id="Limpar" value="Limpar" /> 
                          <input type="submit" name="enviar" id="enviar" value="Enviar" /></td>
                    </tr>
                  </table>
            </fieldset>
        </center>
    </form>
</body>
</html>
