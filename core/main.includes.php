<?php
    ini_set('display_errors',1);
    session_start();
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    define('ROOT_LOCAL',"http://".$_SERVER['SERVER_NAME']."/");
    include_once "../core/database.php";
    include_once "../core/conexao.php";
?>
