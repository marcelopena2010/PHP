<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];

        include_once('../connection/conecta.php');
        coneta('phpcommysql');

        if(mysql_query("INSERT INTO seila VALUES(NULL, '$nome', '$email')")){
            echo 'Inserido no Banco de dados com sucesso';
        }else{
            echo 'Não foi possivel inserir as informações no banco de dados';
        }
?>
