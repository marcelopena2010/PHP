<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="main">

<!-- start header -->
<div id="header">

 <div id="logo">
	<h1>metamorph_roadlights</h1>
	<h2><a href="http://www.metamorphozis.com/" id="metamorph">Design by Metamorphosis Design</a></h2>
  </div>
  <div id="menu">
	  <ul>
	   <li><a href="nada.php">Home</a></li>
	   <li><a href="teste.php">Teste</a></li>
	   <li><a href="#">Suporte</a></li>
	   <li><a href="#">Sobre</a></li>
	   <li><a href="#">Contact</a></li>   
	  </ul>
</div>
<!--Header end -->

</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start leftbar -->
	<div id="leftbar" class="sidebar">
		<div class="line1">
			<h2>Categories</h2>
			<div class="small_back">
			 <div class="back">                  
				<ul>
					<li><a href="#">Aliquam libero</a></li>
					<li><a href="#">Suspendisse mauris</a></li>
					<li><a href="#">Urnanet non semper</a></li>
					<li><a href="#">Proin porttitor</a></li>
				</ul>
				</div>
				</div>
				<div class="bottom_small"></div>
	     </div>
		 	<div class="line1">
				<h2>Archives</h2>
				<div class="small_back">
			 <div class="back"> 
				<ul>
					<li><a href="#">Aliquam libero</a></li>
					<li><a href="#">Consectetuer elit</a></li>
					<li><a href="#">Metus aliquam</a></li>
					<li><a href="#">Suspendisse mauris</a></li>
				  </ul>
				</div>
				</div>
				<div class="bottom_small"></div>
	     </div>
	</div>
	<!-- end leftbar -->
	<!-- start content -->
	<div id="content">
		<div class="post">
		     <div class="line1">			 
			 <h2 class="title">Welcome to Our Website!</h2>
			 <div class="middle_back">     


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
<TD>$modelo</TD>
</TR>";
}
echo "</TABLE>";
mysql_free_result($resultado);
mysql_close($conexao);
?>

				  </div>
				  <div class="date">
					  <ul>
					    <li><a href="#"  class="small_icon1">Caterory: <b>Free Templates</b></a></li>
						<li><a href="#" class="small_icon2">Add Comment(24)</a></li>
						<li><a href="#"  class="small_icon3">RSS</a></li>
					</ul>
				</div>
				  </div>
				  <div class="line1">
					 <h2 class="title">Web Design Starter's Guide</h2>
				 <div class="middle_back">				
	            <ol>
				<li><a href="http://www.metamorphozis.com/free_templates/free_templates.php">More Free Website Templates</a></li>
				<li><a href="http://www.metamorphozis.com/shop/flash_templates.php">Flash Templates</a></li>
                <li><a href="http://www.metamorphozis.com/website_hosting/index.php">Top Hosting Providers</a></li>
                <li><a href="http://www.metamorphozis.com/contact/contact.php">Support For Free Website Templates</a></li>
             
		  </ol><br />
		   </div>
		   <div class="date">
					  <ul>
					    <li><a href="#"  class="small_icon1">Caterory: <b>Free Templates</b></a></li>
						<li><a href="#" class="small_icon2">Add Comment(24)</a></li>
						<li><a href="#"  class="small_icon3">RSS</a></li>
					</ul>
				</div>
				  </div>
				  <div class="line1">	
					<h2 class="title">Praesent Scelerisque</h2>
				 <div class="middle_back">
				<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat:</p>
				 </div>
				 <div class="date">
					  <ul>
					    <li><a href="#"  class="small_icon1">Caterory: <b>Free Templates</b></a></li>
						<li><a href="#" class="small_icon2">Add Comment(24)</a></li>
						<li><a href="#"  class="small_icon3">RSS</a></li>
					</ul>
				</div>
				  </div>
				  
		</div>
	</div>
	<!-- end content -->
	<!-- start rightbar -->
	<div id="rightbar" class="sidebar">
		<div class="line1">
				<h2>Tags</h2>
				<div class="small_back">
			 <div class="back"> 
				<a href="#">dolor</a> <a href="#">ipsum</a> <a href="#">lorem</a> <a href="#">sit amet</a> <a href="#">dolor</a> <a href="#">ipsum</a> <a href="#">lorem</a> <a href="#">sit amet</a> 
			  </div>
				</div>
				<div class="bottom_small"></div>
	     </div>
		 	<div class="line1">
				<h2>Recent Posts</h2>
				 <div class="small_back">
			 <div class="back"> 
				<ul>
					<li><a href="#">Aliquam libero</a></li>
					<li><a href="#">Consectetuer adipiscing elit</a></li>
					<li><a href="#">Urnanet non molestie semper</a></li>
					<li><a href="#">Proin gravida orci porttitor</a></li>
				</ul>
				</div>
				</div>
				<div class="bottom_small"></div>
	     </div>
			<div class="line1">
				<h2>Calendar</h2>
				<div class="small_back">
			 <div class="back"> 
				<div id="calendar">
					<table summary="Calendar">
						<caption>
						December 2008
						</caption>
						<thead>
							<tr>
								<th abbr="Monday" scope="col" title="Monday">M</th>
								<th abbr="Tuesday" scope="col" title="Tuesday">T</th>
								<th abbr="Wednesday" scope="col" title="Wednesday">W</th>
								<th abbr="Thursday" scope="col" title="Thursday">T</th>
								<th abbr="Friday" scope="col" title="Friday">F</th>
								<th abbr="Saturday" scope="col" title="Saturday">S</th>
								<th abbr="Sunday" scope="col" title="Sunday">S</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td abbr="September" colspan="3" id="prev"><a href="#" title="View posts for September 2007">&laquo; Nov </a></td>
								<td class="pad">&nbsp;</td>
								<td colspan="3" id="next">&nbsp;</td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td id="today">4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
							</tr>
							<tr>
								<td>8</td>
								<td>9</td>
								<td>10</td>
								<td>11</td>
								<td>12</td>
								<td>13</td>
								<td>14</td>
							</tr>
							<tr>
								<td>15</td>
								<td>16</td>
								<td>17</td>
								<td>18</td>
								<td>19</td>
								<td>20</td>
								<td>21</td>
							</tr>
							<tr>
								<td>22</td>
								<td>23</td>
								<td>24</td>
								<td>25</td>
								<td>26</td>
								<td>27</td>
								<td>28</td>
							</tr>
							<tr>
								<td>29</td>
								<td>30</td>
								<td><a href="#">31</a></td>
								<td class="pad" colspan="4">&nbsp;</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>
				</div>
				<div class="bottom_small"></div>
	     </div>
	</div>
	<!-- end rightbar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page --> 

<div id="footer">
   <p>Copyright &copy; 2009. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p> 
	<p>Website Design by <a href="http://www.metamorphozis.com/" title="Free Flash Templates">Free Flash Templates</a></p>
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
