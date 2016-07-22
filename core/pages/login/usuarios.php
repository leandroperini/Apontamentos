
    <Center>
    <div class="x_panel">
        <div class="x_title">
            <h2>Lista de Usuários</h2>            
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Cargo</th>
                        <th>Senha</th>
                        <th>Data Criação</th>
                        <th>Status</th>
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
                            <td>
                                <?php
                                if (!empty($usuarioCadastrado['senha_user'])) {
                                    echo $usuarioCadastrado['senha_user'];
                                } else {
                                    echo 'Campo Vazio';
                                }
                                ?>
                                    </td>
                                <td><?php echo $usuarioCadastrado['dt_create_user'] ?></td>
                                <td><?php echo $usuarioCadastrado['status_user'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</center>