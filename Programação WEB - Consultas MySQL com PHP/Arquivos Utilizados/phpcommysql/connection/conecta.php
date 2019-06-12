<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';

    function coneta($db){
        global $servidor, $usuario, $senha;
        @mysql_connect($servidor, $usuario, $senha) or die('Não foi Possivel se conectar ao banco de dados MySQL');

        @mysql_select_db($db);
    }
?>
