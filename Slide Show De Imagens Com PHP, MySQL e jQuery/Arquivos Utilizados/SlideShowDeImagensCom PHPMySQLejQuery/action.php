<?php
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	
	$link = $_POST['link'];
    $arquivo = $_FILES['arquivo'];
	
	
	if(($arquivo['type'] == 'image/jpg') or ($arquivo['type'] == 'image/jpeg') or ($arquivo['type'] == 'image/pjpeg')){
		if(!($arquivo['size'] > 1024000)){
			if(!(file_exists('uploads/indice.txt'))){
				$cria = fopen('uploads/indice.txt', 'a+');
				fclose($cria);	
				$grava = fopen('uploads/indice.txt', 'w');
				fwrite($grava, '0');
				fclose($grava);
				$valor = '0';
			}else{
				$le = fopen('uploads/indice.txt', 'r');
				$valor = fgets($le);
				fclose($le);
				$valor++;
				$grava = fopen('uploads/indice.txt', 'w');
				fwrite($grava, $valor);
				fclose($grava);
			}
			move_uploaded_file($arquivo['tmp_name'], 'uploads/'.$valor.'.jpg');
			mysql_connect('localhost', 'root', '');
			mysql_select_db('slideshow');
			if(mysql_query("INSERT INTO fotos VALUES(NULL, '$link', '".$valor.".jpg')")){
				echo '<strong>Upload Realizado com Sucesso!</strong>';	
			}
		}else{echo 'São somente permitidos arquivos com no maximo 1MB!';}
	}else{echo 'O Formato do arquivo é inválido, por favor faça o upload de arquivos JPG ou JPEG';}
?>