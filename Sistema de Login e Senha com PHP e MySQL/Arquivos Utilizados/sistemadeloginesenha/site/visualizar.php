<?php
    mysql_connect('localhost', 'root', '');
    mysql_select_db('login');
    
    $usuario = $_COOKIE['usuario_powerinside'];
    $senha = $_COOKIE['senha_powerinside'];
    
    $consulta = mysql_query("SELECT * FROM usuarios");
    
    while($resultado = mysql_fetch_array($consulta)){
        if($usuario == $resultado[1] and $senha = $resultado[2]){
             
?>
<?php
    mysql_connect('localhost', 'root', '');
    mysql_select_db('arquivos');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistema de Upload de Arquivos com PHP e MySQL</title>
        <style type="text/css">
            table{border-collapse:collapse; margin:0 auto; border:1px solid #CCC;}
        </style>
    </head>
    <body>
       <table border="1" cellpadding="5" cellspacing="0">
       <tr>
                <th>Nome do Arquivo</th>
                <th>Link Para Download</th>
            </tr>
       <?php
            $consulta = mysql_query("SELECT * FROM arquivos ORDER BY arquivo_id DESC");
            while($array = mysql_fetch_array($consulta)){
       ?>
            <tr>
                <td><?php echo $array[1]; ?></td>
                <td><?php echo '<a href="'.$array[2].'">'.$array[2].'</a>'; ?></td>
            </tr>
            
       <?php
         }
       ?>
        </table>
    </body>
</html>
<?php
        break;
    }
    }
?>