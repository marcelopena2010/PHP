<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sistema de Comentarios com PHP e MySQL</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
        <div id="comentarios">
        	<div class="comentario">
				<span class="titulo_comentario"></span>
                <span class="comentario_comentario"></span>
            </div>
        </div>
        
        <form action="" method="post" enctype="multipart/form-data">
        	<fieldset>
            	<legend>Sistema de Comentário</legend>
                <label class="espaco">
                    <span>Nome <strong>(Obrigátorio):</strong></span>
                    <input type="text" name="nome" value="" />
                </label>
                <label>
                    <span>E-mail <strong>(Obrigátorio):</strong></span>
                    <input type="text" name="email" value="" />
                </label>
                <label>
                    <span>Site <strong>(Não é Obrigátorio):</strong></span>
                    <input type="text" name="site" value="" />
                </label>
                <label>
                    <span>Comentário <strong>(Obrigátorio):</strong></span>
                    <textarea name="comentario">
                    </textarea>
                </label>
                <label>
                    <input id="enviar_btn" type="submit" name="enviar_btn" value="Enviar Comentário" />
                </label>
                </fieldset>
            </form>
	</body>
</html>