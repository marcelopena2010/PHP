<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>SURF WORLS</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <link href="style.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<!-- ImageReady Slices (032.psd) -->
<TABLE WIDTH=780 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center" class="main">
	<TR>
	<td bgcolor="#000000" rowspan=100><img src="images/spacer.gif" width=1 alt=""></td>
		<TD ROWSPAN=5 WIDTH=325 HEIGHT=168 >
			<IMG SRC="images/1.jpg" WIDTH=325 HEIGHT=168 ALT=""><div id="content"><div class="inner_copy"><a href="http://www.site2you.com/">Website Builder</a> <a href="http://www.freetemplatesonline.com/">fto</a> <a href="http://www.websitetemplates.org/">websitetemplates.org</a> <a href="http://www.webdesign.org/website-design">Website Design</a></div></div></TD>
		<TD COLSPAN=2 WIDTH=186 HEIGHT=22 >
			<IMG SRC="images/2.jpg" WIDTH=186 HEIGHT=22 ALT=""></TD>
		<TD COLSPAN=2 ROWSPAN=5 WIDTH=269 HEIGHT=168>
			<IMG SRC="images/3.jpg" WIDTH=269 HEIGHT=168 ALT=""></TD>
			<td bgcolor="#000000" rowspan=100><img src="images/spacer.gif" width=1 alt=""></td>
	</TR>
	<TR>
		<TD COLSPAN=2 WIDTH=186 HEIGHT=33>
			<a href="fotos.php"><img src="images/4.jpg" width=186 height=33 alt="" border=0></a></TD>
	</TR>
	<TR>
		<TD COLSPAN=2 WIDTH=186 HEIGHT=35>
			<a href="load.php"><img src="images/5.jpg" width=186 height=35 alt="" border=0></a></TD>
	</TR>
	<TR>
		<TD COLSPAN=2 WIDTH=186 HEIGHT=39>
			<a href="noticias.php"><img src="images/6.jpg" width=186 height=39 alt="" border=0></a></TD>
	</TR>
	<TR>
		<TD COLSPAN=2 WIDTH=186 HEIGHT=39>
			<a href="faleconosco2.php"><img src="images/7.jpg" width=186 height=39 alt="" border=0></a></TD>
	</TR>
	<TR>
		<TD COLSPAN=5 WIDTH=780 HEIGHT=39>
			<IMG SRC="images/8.jpg" WIDTH=780 HEIGHT=39 ALT=""></TD>
	</TR>
	<tr>
		<TD COLSPAN=2 valign="top" class="main">
				<IMG SRC="images/l1.jpg" WIDTH=338 HEIGHT=44 ALT=""><br>
		
		          </TD>
				  
		<TD>
		<?php
			/* Cria a conex�o
			Substitua pelo seu pr�prio nome de host, nome de usu�rio e senha */
			$conexao = mysql_connect("localhost","root","") or die ("N�o foi poss�vel conectar ao Banco de dados.");
			
			/* Seleciona o Banco de dados
			Substitua os dados abaixo pelos seus */
			$bd = mysql_select_db("surf", $conexao) or die ("N�o foi poss�vel selecionar o Banco de dados.");
			
			// Cria a declara��o SQL
			$sql = "SELECT id, titulo FROM noticias";
			
			// Executa a consulta SQL e traz os resultados
			$resultado = mysql_query($sql, $conexao) or die ("N�o foi poss�vel executar a consulta");
			echo "<TABLE BORDER=1>
			<TR><TH>ID do Item</TH> <TH>titulo</TH>";
				while ($linha = mysql_fetch_array($resultado)) {
				$id_item = $linha["id"];
				$titulo = $linha["titulo"];
				echo "<TR><TD>$id_item</TD>
				<TD><a href='not.php?id=$id_item'>$titulo</a></TD>
				</TR>";
			}
			echo "</TABLE>";
			mysql_free_result($resultado);
			mysql_close($conexao);
?>
		</TD>		  
	</TR>
	<TR>
	
		<TD COLSPAN=5 class="bg2" WIDTH=780 HEIGHT=38 align="center">
         <div class="text5">
       <b> <a href="http://"> HOME </a>   l <a href="http://">  ABOUT US
         </a>  l
          <a href="http://"> LATEST NEWS</a>    l
             <a href="http://">PHOTO GALLERY</a>   l
           <a href="http://" > CONTACT US</a>
         </b></div>
        </TD>
	</TR>
	<TR>
		<TD COLSPAN=5 class="bg3" WIDTH=780 HEIGHT=31 align="center">
        <div class="copy">
        Copyright &copy; 2006 YourCompany Inc. All rights reserved.<br><a href="http://www.webdesign.org">Web Design</a> by <a href="http://www.freetemplatesonline.com">Free Templates</a> Online</a>
        </div>
        </TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=325 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=173 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=56 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=213 HEIGHT=1 ALT=""></TD>
	</TR>
</TABLE>
<!-- End ImageReady Slices -->
</BODY>
</HTML>
