<?php
	function conta_visitas($num_inicial = '0'){
		//Variaveis
		$abrir_arquivo = fopen('contador.txt', 'a');
		fclose($abrir_arquivo);
		$ler_arquivo = fopen('contador.txt', 'r');
		$pega_valor = fgets($ler_arquivo);
		fclose($ler_arquivo);
		if(empty($pega_valor)){
			$grava_arquivo = fopen('contador.txt', 'w');
			fputs($grava_arquivo, $num_inicial);
			@fclose($grava_arquivo);
		}
		else{	
			$pega_valor += 1;
			
			$grava_arquivo2 = fopen('contador.txt', 'w');
			fputs($grava_arquivo2, $pega_valor);
			fclose($grava_arquivo2);
			
			$conta_caracteres = strlen($pega_valor);
			
			echo 'Você é o nosso Visitante Numero:';
			for($i = 0; $i<$conta_caracteres; $i++){
				$numero = substr($pega_valor,$i,1);
				print "
					<img src=\"imagens_numeros/$numero.jpg\" alt=\"\" title=\"\" />
				";
			}
		}
	}
?>