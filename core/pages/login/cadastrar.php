
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


<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">
  <!-- editor -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
  <link href="css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="css/editor/index.css" rel="stylesheet">
  <!-- select2 -->
  <link href="css/select/select2.min.css" rel="stylesheet">
  <!-- switchery -->
  <link rel="stylesheet" href="css/switchery/switchery.min.css" />

  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="nav-md">

  <div class="container body">

    <div class="main_container">

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome Completo <span class="required">*</span>
                      </label>
                        
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Usuário <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                      
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Email <span class="required">*</span>
                      </label>
                        
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                      
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Senha <span class="required">*</span>
                      </label>
                        
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="heard" class="form-control" required>
                              <option value="">Selecione..</option>
                            <option value="1">Estagiário</option>
                            <option value="2">Montador</option>
                            <option value="3">Técnico</option>
                            <option value="5">Gestor</option>
                            <option value="6">Staff</option>
                            <option value="7">Consulta</option>
                            <option value="8">Coordenador</option>
                            <option value="100">Administrador</option>
                            </select>
                        </div>
                    </div>
                      
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="1"> &nbsp; Ativo &nbsp;
                          </label>
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="0" checked=""> Inativo
                          </label>
                        </div>
                      </div>
                    </div>
                      
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancelar</button>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
  </div>
</body>

</html>
