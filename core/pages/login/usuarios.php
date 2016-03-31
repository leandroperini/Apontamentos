<!DOCTYPE html>
<!--
Tela Inicial após a validação do acesso
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>.:: Consulta Usuários ::.</title>
    </head>
    <body>
    <Center>
        <h1>
            <font face="verdana" size="5" color="blue">Lista de Usuários</font>
        </h1>
        <table width="100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Senha</th>
                    <th>Data Criação</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!--  na linha abaixo eu abri uma tag php, desse jeito o apache sabe que ele tem que executar o código php e exibir o conteúdo que estiver dentro dele, no caso é um foreach, mas poderia ser um if onde só exibe um texto se a condição do if for true, por exemplo um texto de erro que aparece quando um dos campos estiver vazio

                abaixo mostro diversas maneiras de colocar uma mensagem caso o campo estiver vazio
                -->
                <?php foreach ($class->usuariosCadastrados as $key => $usuarioCadastrado) : ?>
                <tr>
                        <td><?php echo $usuarioCadastrado['codigo_user'] ?></td>
                        <td><?php echo $usuarioCadastrado['nome_user'] ?></td>
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
    </center>
</body>
</html>