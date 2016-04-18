<!DOCTYPE html>
<!--
Consulta de Apontamentos
-->

<div class="right_col" role="main">
        <div class="">

          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Apontamentos<small>Consulta</small></h2>
                  <div class="clearfix"></div>
                </div>
                
                  <div class="x_content">
                  <div class="row">
                    <div class="col-sm-3 mail_list_column">
                        <form method="POST">
                            <div class="mail_list">
                               <table class="table table-striped">
                                   <tbody class="">
                                    <tr>
                                      <td class="small">Data:</td>
                                      <td><input type="date" name="data" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="small ">Período:</td>
                                       <td>
                                           <input type="date" name="dtInicial" class="form-control">
                                          <input type="date" name="dtFinal" class="form-control">
                                       </td>
                                    </tr>
                                    <tr>
                                      <td class="small">Colaborador:</td>
                                      <td><input type="text" name="tecNome" class="form-control"></td>
                                    </tr>
                                    <tr>
                                      <td class="small">Evento:</td>
                                      <td>
                                          <select name="evento"  class="form-control">
                                            <option>Selecione...</option>
                                            <?php foreach ($class->eventoApontamento as $key => $eventoApontamento) : ?>
                                            <?php echo("<option value='".$eventoApontamento['evento_apontamento']."'>".$eventoApontamento['nome_evento']."</option>"); ?>
                                           <?php endforeach; ?>
                                          </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="small">OS:</td>
                                      <td>
                                          <select name="ordemServ" class="form-control">
                                            <option>Selecione...</option>
                                            <?php foreach ($class->ordemServApontamento as $key => $ordemServApontamento) : ?>
                                            <?php echo("<option value='".$ordemServApontamento['os_apontamento']."'>".$ordemServApontamento['os_apontamento']."</option>"); ?>
                                           <?php endforeach; ?>
                                          </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="small">Site:</td>
                                      <td>
                                          <select name="site" class="form-control">
                                            <option>Selecione...</option>
                                            <?php foreach ($class->siteApontamento as $key => $siteApontamento) : ?>
                                            <?php echo("<option value='".$siteApontamento['site_apontamento']."'>".$siteApontamento['site_apontamento']."</option>"); ?>
                                           <?php endforeach; ?>
                                          </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="small">Gestor:</td>
                                      <td>
                                          <select name="gestor" class="form-control">
                                            <option>Selecione...</option>
                                            <?php foreach ($class->gestorApontamento as $key => $gestorApontamento) : ?>
                                            <?php echo("<option value='".$gestorApontamento['gestor_user']."'>".$gestorApontamento['nome_user']."</option>"); ?>
                                           <?php endforeach; ?>
                                          </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="small">Veículo:</td>
                                      <td>
                                          <select name="veiculo" class="form-control">
                                            <option>Selecione...</option>
                                            <?php foreach ($class->veiculoApontamento as $key => $veiculoApontamento) : ?>
                                            <?php echo("<option value='".$veiculoApontamento['veiculo_apontamento']."'>".$veiculoApontamento['veiculo_apontamento']."</option>"); ?>
                                           <?php endforeach; ?>
                                          </select>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <input class="btn btn-xs btn-small" type="reset" name="reset" id="reset" value="Limpar" />
                                            <input class="btn btn-sm btn-primary" type="submit" name="submit" id="enviar" value="Pesquisar" />
                                        </td>
                                    </tr>
                                  </tbody>
                               </table>
                            </div>
                        </form>
                    </div>
                          
                    <!-- CAMPOS CONSULTA -->


                    <!-- RESULTADO CONSULTA -->
                    <div class="col-sm-9 mail_view">
                      <div class="inbox-body">
                        <div class="view-mail">
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="x_content">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                  <table id="datatable-Ex" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Data</th>
                                        <th>Técnico</th>
                                        <th>Inicial</th>
                                        <th>Final</th>
                                        <th>Site</th>
                                        <th>OS</th>
                                        <th>Evento</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <!-- Loop de visualização de apontamentos -->
                                          <?php foreach ($class->consultaApontamentos as $key => $consultaApontamentos) : ?>
                                              <?php echo("<td>".$consultaApontamentos['id_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['data_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['user_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['hr_ini_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['hr_fim_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['site_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['os_apontamento']."</td>"); ?>
                                              <?php echo("<td>".$consultaApontamentos['evento_apontamento']."</td>"); ?>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- /CONTENT MAIL -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   