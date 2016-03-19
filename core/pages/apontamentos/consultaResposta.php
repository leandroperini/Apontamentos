
<!--
Resposta de consulta de Apontamentos
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta Apontamentos</title>
    </head>
    <body>
        <fieldset>
            <table>
                <tr>
                    <?php
                        $data           = $_POST["data"];
                        $periodoI       = $_POST["hrInicial"];
                        $periodoF       = $_POST["hrFinal"];
                        $tecnicoCod     = $_POST["tecnicoCod"];
                        $tecnicoNome    = $_POST["TecnicoNome"];
                        $gestorNome     = $_POST["GestorNome"];

                        if (isset($_POST["submit"])){  // Entra se "submit" existe e não é null
                            echo $data, $periodoI, $periodoF, $tecnicoCod, $tecnicoNome, $gestorNome;
                        }
                        else{
                            // echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
                        }
                    ?>
                </tr>
            </table>
        </fieldset>
    </body>
</html>