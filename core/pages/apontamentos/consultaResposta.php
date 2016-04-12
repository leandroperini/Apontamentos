
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
        
<div class="x_panel">
        <div class="x_title">
            <h2>Lista de Apontamentos</h2>            
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Usuário</th>
                        <th>Data</th>
                        <th>Hr_Ini</th>
                        <th>Hr_Fim</th>
                        <th>Site</th>
                        <th>OS</th>
                        <th>Evento</th>
                        <th>Descrição</th>
                        <th>Veículo</th>
                        <th>Gestor</th>
                        <th>Observação</th>
                        <th>Data Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($class->consultaApontamento as $key => $consultaApontamento) : ?>
                    <tr>
                        <td><?php echo $consultaApontamento['id_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['user_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['data_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['hr_ini_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['hr_fim_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['site_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['os_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['evento_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['descricao_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['veiculo_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['gestor_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['obs_apontamento'] ?></td>
                        <td><?php echo $consultaApontamento['data_registro_apontamento'] ?></td>
                    </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>