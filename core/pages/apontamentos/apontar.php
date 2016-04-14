

<!DOCTYPE html>
<!--
Tela de Apontamentos
-->

        <fieldset>
            <table width="100%">
                <tr>
                    <td>
                        <input class="btn btn-success" type="button" value="Home" onclick="location. href='/' ">
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
                          <td>
                              <label class="control-label ">Data:</label>
                          </td>
                          <td>
                              <div class="col-md-12">
                                  <input type="date" name="data_apontar" class="form-control">
                              </div>
                          </td>
                          <td>
                              <label class="control-label ">Registro:</label>
                          </td>
                          <td>
                            <div class="col-md-12">
                              <input type="text" name="registro_apontar" class="form-control" disabled="disabled" placeholder="01">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="control-label ">Hora_Inicial:</label>
                          </td>
                          <td>
                              <div class="col-md-8">
                                  <input type="time" name="hrInicial_apontar" class="form-control">
                              </div>
                          </td>
                          <td>
                              <label class="control-label">Hora_Final:</label>
                          </td>
                          <td>
                              <div class="col-md-8">
                                  <input type="time" name="hrFinal_apontar" class="form-control">
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="control-label ">OS:</label>
                          </td>
                          <td>
                              <div class="col-md-6">
                                <input type="text" name="ordemServ_apontar" class="form-control">
                              </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                      <select name="ordemServAno_apontar" class="form-control">
                                          <option>Ano</option>
                                          <option>16</option>
                                          <option>15</option>
                                          <option>14</option>
                                          <option>13</option>
                                      </select>
                                    </div>
                                </div>
                          </td>
                          <td>
                              <label class="control-label ">Site:</label>
                          </td>
                          <td>
                              <div class="col-md-12">
                                <input type="text" name="site_apontar" class="form-control">
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="control-label ">Evento:</label>
                          </td>
                          <td>
                            <div class="form-group">
                                <div class="col-md-12">
                                  <select name="evento_apontar" class="form-control">
                                    <option>Selecione...</option>
                                     <?php foreach ($class->eventosApontamento as $key => $eventosApontamento) : ?>
                                     <?php echo("<option value='".$eventosApontamento['id_evento']."'>".$eventosApontamento['nome_evento']."</option>"); ?>
                                    <?php endforeach; ?>
                              </select>
                                </div>
                            </div>    
                          </td>
                          <td>
                              <label class="control-label ">Gestor:</label>
                          </td>
                          <td>
                            <div class="form-group">
                                <div class="col-md-12">
                                  <select name="gestor_apontar" class="form-control">
                                    <option>Selecione...</option>
                                     <?php foreach ($class->gestorApontamento as $key => $gestorApontamento) : ?>
                                     <?php echo("<option value='".$gestorApontamento['cargo_user']."'>".$gestorApontamento['nome_user']."</option>"); ?>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="control-label ">Atividade:</label>
                          </td>
                          <td colspan="3">
                            <div class="col-md-12 col-sm-9 col-xs-12">
                              <textarea name="atividade_apontar" class="form-control" rows="2" cols="30" placeholder='Descreva suas atividades'></textarea>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="control-label ">Observação:</label>
                          </td>
                          <td colspan="3">
                          <div class="col-md-12 col-sm-9 col-xs-12">
                              <textarea name="observacao_apontar" class="form-control" rows="2" cols="30" placeholder='Campo opcional'></textarea>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="control-label ">Veículo:</label>
                          </td>
                          <td>
                              <div class="col-md-12 col-sm-9 col-xs-12">
                                <input name="veiculo_apontar" type="text" class="form-control">
                              </div>
                          </td>
                          <td><button type="reset" name="reset_apontar" id="reset" class="btn btn-default">Limpar</button></td>
                          <td><button type="submit" name="submit_apontar" id="submit" class="btn btn-primary">Registrar Apontamento</button></td>
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
                    
                    <form method="POST" class="form-group-sm pull-right">
                        <div class="col-md-2">Data: </div>
                        <div class="col-md-7">
                          <input type="date" name="data_filter" class="form-control">
                        </div>
                        <input class="btn btn-success" type="button" value="Filtrar" onclick="location. href='/' ">
                    </form>
                    
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
                        <td>
                            <div>
                              <ul class="nav navbar-right panel_toolbox">
                                <li class="dropdown">
                                  <button class="btn btn-primary" type="button" title="Crop">
                                      <span class="docs-tooltip" data-toggle="tooltip" title="Visualizar registro">
                                          <span class="fa fa-crop"></span>
                                      </span>
                                  </button>
                                  <ul class="dropdown"></ul>
                                </li>
                                <li class="dropdown">
                                  <button class="btn btn-danger" type="button" title="Clear">
                                      <span class="docs-tooltip" data-toggle="tooltip" title="Apagar registro">
                                          <span class="fa fa-close"></span>
                                      </span>
                                  </button>
                                  <ul class="dropdown"></ul>
                                </li>
                              </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>09:00</td>
                        <td>10:00</td>
                        <td>Testes</td>
                        <td> 
                          <div>
                            <ul class="nav navbar-right panel_toolbox">
                              <li class="dropdown">
                                <button class="btn btn-primary" type="button" title="Crop">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="Visualizar registro">
                                        <span class="fa fa-crop"></span>
                                    </span>
                                </button>
                                <ul class="dropdown"></ul>
                              </li>
                              <li class="dropdown">
                                <button class="btn btn-danger" type="button" title="Clear">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="Apagar registro">
                                        <span class="fa fa-close"></span>
                                    </span>
                                </button>
                                <ul class="dropdown"></ul>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>10:00</td>
                        <td>11:00</td>
                        <td>Instalação</td>
                        <td>
                            <div>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li class="dropdown">
                                      <button class="btn btn-primary" type="button" title="Crop">
                                          <span class="docs-tooltip" data-toggle="tooltip" title="Visualizar registro">
                                              <span class="fa fa-crop"></span>
                                          </span>
                                      </button>
                                      <ul class="dropdown"></ul>
                                    </li>
                                    <li class="dropdown">
                                      <button class="btn btn-danger" type="button" title="Clear">
                                          <span class="docs-tooltip" data-toggle="tooltip" title="Apagar registro">
                                              <span class="fa fa-close"></span>
                                          </span>
                                      </button>
                                    <ul class="dropdown"></ul>
                                </li>
                                </ul>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                <div>
                    <center>
                        <label>Como foi o seu dia? </label>
                        <input type="radio" name="humor_apontar" value="Bom" checked> Ótimo
                        <input type="radio" name="humor_apontar" value="Regular"> Regular
                        <input type="radio" name="humor_apontar" value="Ruim"> Ruim
                        <input type="radio" name="humor_apontar" value="Péssimo"> Péssimo <br><br>
                        <button type="submit" name="submit_apontamento" id="submit" class="btn btn-success">Finalizar Apontamentos do Dia</button>
                    </center> 
                </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

        </div>
        
      </div>
      <!-- /page content -->

  