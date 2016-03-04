
<?php
echo ("Estou funcionando <br />");

include("./core/main.includes.php");

echo "<table>";
    echo "<tr>
            <td align='center'><input type='button' value='Tela Login' onclick = location.href='./core/login.php'; ></td>
            <td align='center'><input type='button' value='Tela Home' onclick = location.href='./core/home.php'; ></td>
        </tr>";
echo "</table>";

//$id = @$page[2];
    
if ($page[0]) {

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
}
