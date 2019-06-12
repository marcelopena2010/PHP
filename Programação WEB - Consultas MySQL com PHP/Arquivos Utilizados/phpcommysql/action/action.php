<table border="1" cellpadding="5" cellspacing="0">
            <tr>
                    <th>
                       ID
                   </th>
                   <th>
                       Nome
                   </th>
                   <th>
                       E-mail
                   </th>
            </tr>

<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];

        include_once('../connection/conecta.php');
        coneta('phpcommysql');

        mysql_query("INSERT INTO exemplo VALUES(NULL, '$nome', '$email')");

        $consulta = mysql_query("SELECT * FROM exemplo");

        while($resultado = mysql_fetch_array($consulta)){
?>
        <tr>
            <td>
                <?php echo $resultado[0]; ?>
            </td>
            <td>
                <?php echo $resultado[1]; ?>
            </td>
            <td>
                <?php echo $resultado[2]; ?>
            </td>
        </tr>
<?php
        }
?>
</table>
