<!DOCTYPE html>
<!--
Confirmação de cadastro de usuário
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuário Cadastrado</title>
    </head>
    <body>
        <fieldset>
            <table>
                <tr>
                    <center>
                        <font>Usuário Cadastrado com Sucesso</font>
                        <?php
                            print_r($this->db->execute("select * from user"));
                        ?>
                        
                    </center>
                </tr>
            </table>
        </fieldset>
    </body>
</html>