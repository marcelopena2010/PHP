<?php
    include_once('connection/conecta.php');
    coneta('phpcommysql');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP com MySQL</title>
        <style type="text/css">
            label{display:block; margin:0 0 10px 0;}
        </style>
    </head>
    <body>
        <form action="action/action.php" method="post">
            <label>
                    <span>
                            Nome:
                    </span>
                    <input type="text" name="nome" value="" />
            </label>
             <label>
                    <span>
                            E-mail:
                    </span>
                    <input type="text" name="email" value="" size="40" />
            </label>
            <label>
                <input type="submit" nome="enviar" value="Enviar">
            </label>
        </form>
    </body>
</html>
