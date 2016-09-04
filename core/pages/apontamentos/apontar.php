
<!DOCTYPE html>
<!--
Tela de Apontamentos
-->
    
    <table width="100%">
        <tr>
            <td align="right">
                <span id="clock" ></span>
                <script>setTimeout("data_hora()",10);</script>
                <script type="text/javascript" src="/assets/js/data_hora.js"></script>
            </td>
        </tr>
    </table>


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
                  <form method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <!-- Campo Data -->
                    <div class="form-group">
                        <label class="control-label col-md-6 col-sm-3 col-xs-12">Date do Apontamento *
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input class="date-picker form-control col-md-4 col-xs-8" required="required" type="date" name="data_apontar" id="data_apontar">
                          <span class="fa fa-calendar-check-o form-control-feedback right" aria-hidden="true" ></span>
                        </div>
                    </div>
                    <!-- Campo Data Término -->
                    <!-- Campo Horário Início -->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Horário * </label>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group ">
                            <input type="time" class="form-control has-feedback-left" required="required" name="hrInicial_apontar" id="hrInicial_apontar">
                          <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="time" class="form-control" required="required" name="rFinal_apontar" id="hrFinal_apontar">
                          <span class="fa fa-clock-o form-control-feedback right" aria-hidden="true" ></span>
                        </div>
                    </div>
                    <!-- Campo Horário Término -->
                    <!-- Campo Ordem de Serviço Início -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">OS *</label>
                    <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" name="ordemServ_apontar" id="ordemServ_apontar" placeholder="OS">
                      <span class="fa fa-paragraph form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-4 form-group has-feedback required">
                        <select name="ordemServAno_apontar" id="ordemServAno_apontar" required="required" class="form-control">
                            <option selected disabled>Ano</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                        </select>
                    </div>
                    </div>
                    <!-- Campo Ordem de Serviço Término -->
                    <!-- Campo Site Início -->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Site *</label>
                        <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback-left">
                            <input type="text" class="form-control" required="required" name="site_apontar" id="site_apontar" placeholder="Digite o nome do site">
                        <span class="fa fa-empire form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <!-- Campo Site Término -->
                    <!-- Campo Evento Início -->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Evento *</label>
                        <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback-left">
                            <select name="evento_apontar" id="evento_apontar" required="required" class="form-control">
                            <option selected disabled>Selecione...</option>
                             <?php foreach ($class->eventosApontamento as $key => $eventosApontamento) : ?>
                             <?php echo("<option value='".$eventosApontamento['id_evento']."'>".$eventosApontamento['nome_evento']."</option>"); ?>
                            <?php endforeach; ?>
                            </select>
                          <span class="fa fa-sort-amount-asc form-control-feedback right" aria-hidden="true" ></span>
                        </div>
                      </div>
                      <!-- Campo Evento Término-->
                      <!-- Campo Gestor Início -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gestor * </label>
                            <div class="col-md-9 col-sm-9 col-xs-12 has-feedback-left">
                                <select name="gestor_apontar" id="gestor_apontar" required="required" class="form-control">
                                <option selected disabled>Selecione...</option>
                                 <?php foreach ($class->gestorApontamento as $key => $gestorApontamento) : ?>
                                         <?php echo("<option value='".$gestorApontamento['cargo_user']."'>".$gestorApontamento['nome_user']."</option>"); ?>
                                        <?php endforeach; ?>
                                </select>
                              <span class="fa fa-male form-control-feedback right" aria-hidden="true" ></span>
                            </div>
                      </div>
                      <!-- Campo Gestor Término -->
                      <!-- Campo Atividade Início -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Atividade * </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="atividade_apontar" id="atividade_apontar" required="required" class="form-control" rows="3" cols="50" placeholder='Detalhe suas atividades'></textarea>
                        </div>
                      </div>
                      <!-- Campo Atividade Término -->
                      <!-- Campo Observação Início -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Obervação: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="observacao_apontar" id="observacao_apontar" class="form-control" rows="3" cols="50" placeholder='Informação adicional'></textarea>
                        </div>
                      </div>
                      <!-- Campo Observação Término -->
                      <!-- Campo Veículo Início -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Veículo: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input name="veiculo_apontar" id="veiculo_apontar" type="text" required="required" class="form-control">
                        </div>
                      </div>
                      <!-- Campo Veículo Término -->
                      <!-- Campo Botões Início -->
                      <div class="control-label col-md-12">
                        <button type="reset" name="reset_apontar" id="reset" class="btn btn-default">Limpar</button>
                        <button type="submit" name="submit_apontar" id="submit_apontar" class="btn btn-primary">Registrar Apontamento</button>
                      </div>
                      <!-- Campo Botões Término -->
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
                <br />
                    
                    <form method="POST" class="form-horizontal form-label">                        
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data: </label>
                        <div class="col-md-5 col-sm-9 col-xs-12">
                            <input name="data_filter" type="date" class="form-control">
                        </div>
                        <input class="btn btn-success" type="button" value="Filtrar" onclick="location. href='/' ">
                    </form>
                </div>
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
                  <div class="clearfix"></div>
                  <div class="ln_solid"></div>
                  <form method="POST">
                    <div>
                        <p>
                          <label>Como foi o seu dia? </label>
                          <input type="radio" class="flat" name="humor_apontar" id="humor_apontar_otimo" value="Otimo" checked="" required /> Ótimo
                          <input type="radio" class="flat" name="humor_apontar" id="humor_apontar_bom" value="Bom" required /> Bom
                          <input type="radio" class="flat" name="humor_apontar" id="humor_apontar_regular" value="Regular" /> Regular
                          <input type="radio" class="flat" name="humor_apontar" id="humor_apontar_ruim" value="Ruim" /> Ruim
                          <input type="radio" class="flat" name="humor_apontar" id="humor_apontar_pessimo" value="Pessimo" /> Péssimo <br><br>
                        </p>
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit_apontamento" id="submit" class="btn btn-success">Finalizar Apontamentos do Dia</button>
                        </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
