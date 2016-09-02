
    <div class="x_title"> 
        <h2>Lista de Usuários <small>Usuários registrados</small></h2>
        <div class="clearfix"></div>
    </div>
    
    <div class="x_panel">
        
        <div class="x_content">

            <table id="datatable-keytable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Registro</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Cargo</th>
                        <th>Status</th>
                        <th>Data Criação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($class->usuariosCadastrados as $key => $usuarioCadastrado) : ?>
                    <tr>
                            <td><?php echo $usuarioCadastrado['id_user'] ?></td>
                            <td><?php echo $usuarioCadastrado['nome_user'] ?></td>
                            <td><?php echo $usuarioCadastrado['login_user'] ?></td>
                            <?php if (!empty($usuarioCadastrado['email_user'])): ?>
                                <td><?php echo $usuarioCadastrado['email_user'] ?></td>
                            <?php else: ?>
                                <td>Campo Vazio</td>
                            <?php endif; ?>
                            <td><?php echo $usuarioCadastrado['cargo_user']? : 'Campo Vazio' ?></td>
                            <td><?php echo $usuarioCadastrado['status_user'] ?></td>
                            <td><?php echo $usuarioCadastrado['dt_create_user'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="/assets/gentelella-master/production/js/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/dataTables.bootstrap.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/dataTables.buttons.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/jszip.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/pdfmake.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/vfs_fonts.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/buttons.html5.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/buttons.print.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/dataTables.responsive.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="/assets/gentelella-master/production/js/datatables/dataTables.scroller.min.js"></script>

        <!-- pace -->
        <script src="/assets/gentelella-master/production/js/pace/pace.min.js"></script>
       
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>