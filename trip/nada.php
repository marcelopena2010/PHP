<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
echo "Data: ";
echo date("d/m/y"); // exibe a data no formato DD/MM/YY
echo " Hora: ";
echo date("H:i"); //exibe a hora no formato HH:MM
?>


<?php
/* Cria a conexão
Substitua pelo seu próprio nome de host, nome de usuário e senha */
$conexao = mysql_connect("localhost","root","") or die ("Não foi possível conectar ao Banco de dados.");

/* Seleciona o Banco de dados
Substitua os dados abaixo pelos seus */
$bd = mysql_select_db("tttt", $conexao) or die ("Não foi possível selecionar o Banco de dados.");

// Cria a declaração SQL
$sql = "SELECT * FROM carros";

// Executa a consulta SQL e traz os resultados
$resultado = mysql_query($sql, $conexao) or die ("Não foi possível executar a consulta");
echo "<TABLE BORDER=1>
<TR><TH>ID do Item</TH> <TH>MODELO</TH>";
while ($linha = mysql_fetch_array($resultado)) {
$id_item = $linha["id"];
$modelo = $linha["modelo"];
echo "<TR><TD>$id_item</TD>
<TD>modelo</TD>
</TR>";
}
echo "</TABLE>";
mysql_free_result($resultado);
mysql_close($conexao);
?>
</body>
</html>
