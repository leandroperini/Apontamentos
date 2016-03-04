<?php
include "../core/main.includes.php";

//$id = @$page[2];
//if ($page[0]) {
//
//    //Verificacao de pagina existente
//    if (@$page[1]) {
//        if (!file_exists("acoes/" . $page[0] . "/" . $page['1'] . ".php")) {
//            Header("location: /home/erro");
//            die();
//        }
//    } else {
//        if (!file_exists("acoes/" . $page[0] . "/index.php")) {
//            Header("location: /home/erro");
//            die();
//        }
//    }
//
//
//    $class = new $page[0]();
//
//    if (@$page[3]) {
//        $nivel = sizeof($page);
//        for ($i = 3; $i <= $nivel; $i++) {
//            @$class->params[substr(strstr(@$page[$i], '=', true), 1)] = substr(strstr(@$page[$i], '='), 1);
//        }
//    }
//    if (@$page[1]) {
//        include "acoes/" . $page[0] . "/" . $page['1'] . ".php";
//    } else {
//        include "acoes/" . $page[0] . "/index.php";
//    }
//
//    include 'layouts/' . $class->layout . ".php";
//}