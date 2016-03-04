
<html>
    <head>
        <title> Apontamentos </title>
    </head>
    <body>
        <table>
            <tr>
                <td>Bem vindo ao Sistema de Apontamentos<br /></td>
            </tr>
            <tr>
                <td><a href="../core/login.php">Acessar Sistema</a></td>
            </tr>
        </table>
    </body>
</html>

<?php

include("../core/main.includes.php");

//$id = @$page[2];
/*    
if (@$page[0]) {

    //Verificacao de pagina existente
    if (@$page[1]) {
        if (!file_exists("core/" . $page[1] . ".php")) {
            Header("location: ./core");
            die();
        }
    } else {
        if (!file_exists("./" . $page[0] . "/index.php")) {
            Header("location: /home/erro");
            die();
        }
    }

    $class = new $page[0]();

    if (@$page[1]) {
       include "core/" . $page[2] . ".php";
    } else {
        include "./" . $page[0] . "/index.php";
    }
    
    if (@$page[3]) {
        $nivel = sizeof($page);
        for ($i = 3; $i <= $nivel; $i++) {
            @$class->params[substr(strstr(@$page[$i], '=', true), 1)] = substr(strstr(@$page[$i], '='), 1);
        }
    }

//    include 'layouts/' . $class->layout . ".php";

 * }
 */
