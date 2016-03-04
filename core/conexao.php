
<?php

$login = @$_POST['login'];
$entrar = @$_POST['entrar'];
$senha = (@$_POST['senha']);
$server = 'localhost';
$username = 'root';
$password = '';
$banco = 'test';

$connect = mysqli_connect($server, $username, $password);

$db = mysqli_select_db($connect, $banco);

