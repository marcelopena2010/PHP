<?php
    mysql_connect('localhost', 'root', '');
    
    function verificaUsuario(){
        $usuario = strip_tags(trim($_POST['usuario']));
        $senha = strip_tags(trim($_POST['senha']));
        $botao_logar = strip_tags(trim($_POST['logar']));
    
        if($botao_logar){
           setcookie('usuario_powerinside', $usuario);  
           setcookie('senha_powerinside', $senha);  
           echo 'Cookie Setado com Sucesso'; 
           
           header("refresh:0, url=http://localhost/sistemadeloginesenha/site/"); 
        }
    }
?>
<html>
    <head>
        <title>
            Sistema de Login e Senha com PHP e MySQL
        </title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Login do Sistema de Upload</legend>
                <label>
                    <span>Usuario:</span>
                    <input type="text" name="usuario" />
                </label>
                <label>
                    <span>Senha:</span>
                    <input type="password" name="senha" />
                </label>
                <label>
                    <input type="submit" name="logar" value="Logar" />
                </label>
            </fieldset>
        </form>
        <?php
           verificaUsuario();
           
        ?>
    </body>
</html>