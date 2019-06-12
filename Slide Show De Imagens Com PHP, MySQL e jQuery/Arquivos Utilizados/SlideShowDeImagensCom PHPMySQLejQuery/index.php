<?php
	mysql_connect('localhost', 'root', '');
	mysql_select_db('slideshow');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Slide Show de Imagens</title>
        <script type="text/javascript" src="plugins/jQuery.js"></script>
        <script type="text/javascript" src="plugins/cycle.js"></script>
        <script type="text/javascript">
        	$(document).ready(function(){
				$('#slideshow').cycle({
					fx: 'fade',
					sleep: 3000,
					pager: '#pager'
				});
			});
        </script>
        <style>
			#box{width:980px; margin:0 auto;}
			#slideshow{width:970px; height:370px; border:5px solid #FFF; overflow:hidden; margin:0 auto;}
			#slideshow a img{border:none; margin:5px;}
			#pager{float:right;}
			#pager a{display:block; float:left; text-align:center; width:25px; height:23px; background:#000; border:2px solid #FFF; margin:5px 2px 0 0 ; padding:2px 0 0 0; color:#FFF; text-decoration:none;}
			#pager a:hover{background:#039;}
		</style>
	</head>
	<body bgcolor="#222">
    <div id="box">
    	<div id="slideshow">
        	<?php
            	$consulta = mysql_query('SELECT * FROM fotos ORDER BY ID DESC');
				while($row = mysql_fetch_row($consulta)){
			?>
        	<a href="<?php echo $row[1];?>"><img src="<?php echo 'uploads/'.$row[2]; ?>" alt="" title="" /></a>	
            <?php
				}
			?>
        </div>
         <span id="pager"></span>	
      </div>
	</body>
</html>