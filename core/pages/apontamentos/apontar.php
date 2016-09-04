
<!DOCTYPE html>
<!--
Tela de Apontamentos
-->
    <fieldset>
        <table width="100%">
            <tr>
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


  <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Novo Apontamento <small>Descreva suas atividades</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <label class="control-label col-md-6 col-sm-3 col-xs-12">Date do Apontamento *
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input class="date-picker form-control col-md-4 col-xs-8" required="required" type="date" name="data_apontar">
                          <span class="fa fa-calendar-check-o form-control-feedback right" aria-hidden="true" ></span>
                        </div>
                      </div>
                      
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="time" class="form-control has-feedback-left" id="hrInicial_apontar">
                      <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="time" class="form-control" id="hrFinal_apontar">
                      <span class="fa fa-clock-o form-control-feedback right" aria-hidden="true" ></span>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">OS *</label>
                    <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="ordemServ_apontar" placeholder="OS">
                      <span class="fa fa-paragraph form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-4 form-group has-feedback required">
                        <select name="ordemServAno_apontar" class="form-control">
                            <option selected disabled>Ano</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                        </select>
                    </div>
                    </div>
                    
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Site *</label>
                          <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback-left">
                          <input type="text" class="form-control" id="inputSuccess5" placeholder="Digite o nome do site">
                          <span class="fa fa-empire form-control-feedback right" aria-hidden="true"></span>
                          </div>
                    </div>
                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Evento *</label>
                        <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback-left">
                          <select name="evento_apontar" class="form-control">
                            <option selected disabled>Selecione...</option>
                             <?php foreach ($class->eventosApontamento as $key => $eventosApontamento) : ?>
                             <?php echo("<option value='".$eventosApontamento['id_evento']."'>".$eventosApontamento['nome_evento']."</option>"); ?>
                            <?php endforeach; ?>
                            </select>
                          <span class="fa fa-sort-amount-asc form-control-feedback right" aria-hidden="true" ></span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gestor * </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 has-feedback-left">
                              <select name="gestor_apontar" class="form-control">
                                <option selected disabled>Selecione...</option>
                                 <?php foreach ($class->gestorApontamento as $key => $gestorApontamento) : ?>
                                         <?php echo("<option value='".$gestorApontamento['cargo_user']."'>".$gestorApontamento['nome_user']."</option>"); ?>
                                        <?php endforeach; ?>
                                </select>
                              <span class="fa fa-male form-control-feedback right" aria-hidden="true" ></span>
                            </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Atividade * </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="atividade_apontar" class="form-control" rows="3" cols="50" placeholder='Detalhe suas atividades'></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Obervação: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="observacao_apontar" class="form-control" rows="3" cols="50" placeholder='Informação adicional'></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Veículo: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <input name="veiculo_apontar" type="text" class="form-control">
                        </div>
                      </div>
                      
                      <div class="control-label col-md-12">
                        <button type="reset" name="reset_apontar" id="reset" class="btn btn-default">Limpar</button>
                        <button type="submit" name="submit_apontar" id="submit" class="btn btn-primary">Registrar Apontamento</button>
                      </div>
                  </form>
                </div>
              </div>

            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Eventos Salvos <small>Relação de eventos cadastrados</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                
                <div class="x_content">
                <br />
                    
                    <form method="POST" class="form-horizontal form-label">                        
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data: </label>
                        <div class="col-md-5 col-sm-9 col-xs-12">
                            <input name="data_filter" type="date" class="form-control">
                        </div>
                        <input class="btn btn-success" type="button" value="Filtrar" onclick="location. href='/' ">
                    </form>
                    
                  <table class="table table-striped">
                      <thead> 
                      <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Hora Inicial</th>
                        <th>Hora Final</th>
                        <th>Evento</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <!-- Loop de visualização de apontamentos -->
                        <?php foreach ($class->listaApontamento as $key => $listaApontamento) : ?>
                            <?php echo("<th scope='row'>".$listaApontamento['id_apontamento']."</th>"); ?>
                            <?php echo("<td>".$listaApontamento['data_apontamento']."</td>"); ?>
                            <?php echo("<td>".$listaApontamento['hr_ini_apontamento']."</td>"); ?>
                            <?php echo("<td>".$listaApontamento['hr_fim_apontamento']."</td>"); ?>
                            <?php echo("<td>".$listaApontamento['evento_apontamento']."</td>"); ?>
                        <td>
                            <!-- Loop para exibição de botões de função -->
                            <?php echo("<a href='#' class='btn btn-primary btn-xs'>".
                                "<i class='fa fa-folder'></i></a>".
                                "<a href='#' class='btn btn-danger btn-xs'>".
                                "<i class='fa fa-trash-o'></i></a>"); ?>
                        </td>
                      </tr>
                        <?php endforeach; ?>
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
          </div>
