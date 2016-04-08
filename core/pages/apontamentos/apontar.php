
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

<script src="js/jquery.min.js"></script>

<script src="../assets/js/ie8-responsive-file-warning.js"></script>
        
</head>



<!DOCTYPE html>
<!--
Tela de Apontamentos
-->

        <fieldset>
            <table width="100%">
                <tr>
                    <td>
                        <input type="button" value="Home" onclick="location. href='/' ">
                    </td>
                    
                    <td align="center">
                        <font face="verdana" size="4" color="red">Decreva suas atividades realizadas</font>
                    </td>
                    <td align="right">
                        <span id="clock" ></span>
                        <script>setTimeout("data_hora()",10);</script>
                        <script type="text/javascript" src="/assets/js/data_hora.js"></script>
                    </td>
                </tr>
            </table>
        </fieldset>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Novo Apontamento <small>Descreva suas atividades</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div>

                  
                <form method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <table class="table table-hover">
                        <tr>
                          <td>Data:</td>
                          <td><input type="date" name="data" id="data" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Hora Inicial:</td>
                          <td><input type="time" name="hrInicial" id="hrInicial" /></td>
                          <td>Hora Final:</td>
                          <td><input type="time" name="hrFinal" id="hrInicial" /></td>
                        </tr>
                        <tr>
                          <td>OS:</td>
                          <td align="left">
                            <input type="search" name="OS" size="8" maxlength="25"> -
                            <select name="ano">
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                            </select>
                          </td>
                          <td>Site:</td>
                          <td><input type="search" name="site" size="16" maxlength="16"></td>
                        </tr>
                        <tr>
                          <td>Evento:</td>
                            <td>
                              <?php
    //                                "@duvida_perini";
                              // Montar o select apartir com os dados da tabela evento do banco
                              ?>
                              <select name="Evento">
                                  <option value="">Selecione...</option>
                                  <?php foreach ($class->eventosApontamento as $key => $eventosApontamento) : ?>
                                  <?php echo("<option value='".$eventosApontamento['id_evento']."'>".$eventosApontamento['nome_evento']."</option>"); ?>
                      <?php endforeach; ?>
                              </select>
                          </td>
                          <td>Gestor:</td>
                          <td>
                            <select name="gestor">
                                <option>Anderson</option>
                                <option>Alex</option>
                                <option>Maro</option>
                                <option>André</option>
                                <option>Gerlan</option>
                                <option>Henrique</option>
                                <option>Tárcio</option>
                                <option>Cláudio</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Atividade:</td>
                          <td colspan="3"><textarea name="Atividade" rows="2" cols="1" id="Atividade"></textarea></td>
                        </tr>
                        <tr>
                          <td>Observação:</td>
                          <td colspan="3"><textarea name="Observacao" rows="2" cols="1" id="Observacao"></textarea></td>
                          
                        </tr>
                        <tr>
                          <td>Veículo:</td>
                          <td><input type="search" name="site" size="16" maxlength="16"></td>
                          <td><button type="reset" name="reset" id="reset" class="btn btn-default">Limpar</button></td>
                          <td><button type="submit" name="submit" id="submit" class="btn btn-primary">Registrar Apontamento</button></td>
                        </tr>
                    </table>
                    </form>

                </div>
              </div>
            </div>


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Eventos Salvos <small>Relação de eventos cadastrados</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Hora Inicial</th>
                        <th>Hora Final</th>
                        <th>Evento</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>08:00</td>
                        <td>09:00</td>
                        <td>Deslocamento</td>
                        <td class=" last"><a href="#">View</a>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>09:00</td>
                        <td>10:00</td>
                        <td>Testes</td>
                        <td class=" last"><a href="#">View</a>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>10:00</td>
                        <td>11:00</td>
                        <td>Instalação</td>
                        <td class=" last"><a href="#">View</a>
                      </tr>
                    </tbody>
                  </table>
                <div>
                    <center>
                        <label>Como foi o seu dia? </label>
                        <input type="radio" name="classificação" value="Bom" checked> Ótimo
                        <input type="radio" name="classificação" value="Regular"> Regular
                        <input type="radio" name="classificação" value="Ruim"> Ruim
                        <input type="radio" name="classificação" value="Péssimo"> Péssimo <br><br>
                        <button type="submit" name="submit" id="submit" class="btn btn-success">Finalizar Apontamentos do Dia</button>
                    </center>
                </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

        </div>
        
      </div>
      <!-- /page content -->
    