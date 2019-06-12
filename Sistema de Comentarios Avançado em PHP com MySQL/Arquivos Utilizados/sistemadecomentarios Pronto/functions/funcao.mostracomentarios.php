<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="comentarios">
<?php
    function mostracomentarios(){
        function cortatexto($texto, $num_maximo_caracteres){
            $conta_caracteres = strlen($texto);
            
            if($num_maximo_caracteres <  $conta_caracteres){
                $novo_texto = substr($texto, 0, $num_maximo_caracteres);
                $novo_texto .= '...';
                
                return $novo_texto;
            }else{
                return $texto;
            }
        }
        
        mysql_connect('localhost', 'root', '');
        mysql_select_db('sistema_comentarios');
        
        $consulta = "SELECT * FROM comentarios ORDER BY comentario_id DESC";
        
        $set_consulta = mysql_query($consulta);
        
        while($comentario = mysql_fetch_array($set_consulta)){
?>
        	<div class="comentario">
				<span class="titulo_comentario"><?php echo cortatexto($comentario[1], 12).' Disse no dia '.$comentario[5].' as '.$comentario[6]; ?></span>
                <span class="comentario_comentario"><?php echo cortatexto($comentario[4], 300); ?></span>
            </div>
        
<?php            
        }
    }  
?>
</div>