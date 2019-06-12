<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Automoveis</title>
<meta name="description" content="Auto dealer website">
<meta name="keywords" content="autos, cars, dealer">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="653" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="1"><img src="images/hd_l.gif" width="2" height="129"></td>
<td width="1" valign="top" background="images/logo_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><img src="images/spacer.gif" width="108" height="15">
</td>
</tr>
<tr>
<td><img align="right" src="images/logocars.gif" width="70" height="70"></td>
</tr>
</table></td>
<td width="1" valign="top" background="images/companyname_bg.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><img src="images/spacer.gif" width="205" height="58"></td>
</tr>
<tr>
<td><span class="style2">Automoveis</span></td>
</tr>
</table></td>
<td width="1"><img src="images/auto.jpg" width="334" height="129"></td>
<td width="1"><img src="images/hd_r.gif" width="2" height="129"></td>
</tr>
</table></td>
</tr>
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="1"><img src="images/menu_l.jpg" width="25" height="31"></td>
<td background="images/menu_btnbg.jpg" class="menu"><a href="http://localhost/cars/" class="menu_lnk">Inicio</a></td>
<td width="1"><img src="images/menu_sep.jpg" width="36" height="31"></td>
<td background="images/menu_btnbg.jpg" class="menu"><a href="fotos.php" class="menu_lnk">Carros</a> </td>
<td width="1"><img src="images/menu_sep.jpg" width="36" height="31"></td>
<td background="images/menu_btnbg.jpg" class="menu"><a href="http://www.webmotors.com.br/WebMotors/Compra/carrosbusca/carros-busca.aspx" class="menu_lnk">Compra</a></td>
<td width="1"><img src="images/menu_sep.jpg" width="36" height="31"></td>
<td background="images/menu_btnbg.jpg" class="menu"><a href="https://www.webmotors.com.br/WebMotors/Venda/vendaHome/venda-home.aspx" class="menu_lnk">Vende</a> </td>
<td width="1"><img src="images/menu_sep.jpg" width="36" height="31"></td>
<td background="images/menu_btnbg.jpg" class="menu"><a href="faleconosco2.php" class="menu_lnk">Fale Conosco</a></td>
<td width="1"><img src="images/menu_r.jpg" width="36" height="31"></td>
</tr>
</table></td>
</tr>
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="1" background="images/faska_l.gif" class="bgy"><img src="images/spacer.gif" width="1" height="33"></td>
<td align="center" background="images/welc_bg.gif"><span class="style1">BEM-VINDO OS AUTOMOVEIS!</span> </td>
<td width="1" background="images/faska_r.gif" class="bgy"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td height="100%" valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="2" background="images/faska_l.gif" class="bgy"><img src="images/spacer.gif" width="1" height="1"></td>
<td valign="top" bgcolor="#e8ebe7" class="base_txt">
<center>
			<?php $nome_temporario=$_FILES["Arquivo"]["tmp_name"]; $nome_real=$_FILES["Arquivo"]["name"]; copy($nome_temporario,					"repositorio/$nome_real"); ?>
			
			<h2> FOTO ENVIADA COM SUCESSO!!!!</h2>
			
			<a href="fotos.php"> FOTOS </a>
	
	</center>
  <p><br>
    </p></td>
<td width="2" background="images/faska_r.gif" class="bgy"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="1" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>

<td bgcolor="#344e6c" class="bottom_menu">Designed by <a href="load.php" target="_blank">enviar as fotos  </a> &amp; <a href="load.php" target="_blank"> Seu Carro </a></td>
<td bgcolor="#344e6c" class="bottom_menu">Designed by <a href="http://www.webmotors.com.br" target="_blank">Anunciar o seu veiculo </a> &amp; <a href="http://www.webmotors.com.br" target="_blank">WebMotors.com.br</a></td>
<td width="1"><img src="images/kel_r.jpg" width="200" height="42"></td>
</tr>
</table></td>
</tr>
</table>

</body>
</html>