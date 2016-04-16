
<body class="nav-md">

  <div class="container body">

    <div class="main_container">

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
        <div class="x_title">
            <h2>Cadastro de Usuários <small>Lançamento de novos usuários</small></h2>
            <div class="clearfix"></div>
        </div>
            
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                
                <div class="x_content">
                  <br />
                  <form method="POST" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome Completo <span class="required"></span>
                      </label>
                        
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nome" name="nome" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user">Usuário <span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="user" name="login" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                      
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                      </label>
                        
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                      
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="senha">Senha <span class="required"></span>
                      </label>
                        
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="senha" name="senha" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                         
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="cargo" name="cargo" class="form-control" required>
                                <option value="">Selecione...</option>
                                <?php foreach ($class->cargosUsuarios as $key => $cargosUsuarios) : ?>
                                    <?php echo("<option value='".$cargosUsuarios['id_cargo']."'>".$cargosUsuarios['nome_cargo']."</option>"); ?>
                        <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                      
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="status" id="status" value="1" checked=""> Ativo
                          </label>
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="status" id="status" value="0"> Inativo
                          </label>
                        </div>
                      </div>
                    </div>
                      
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="reset" name="reset" id="reset" class="btn btn-primary">Cancelar</button>
                          <button type="submit" name="submit" id="submit" class="btn btn-success">Cadastrar</button>
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
