<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistema de Upload de Arquivos com PHP e MySQL</title>
        <style type="text/css">
            form{width:550px; height:100px; margin:0 auto;}
            label{display:block; width:460px; margin:10px auto;}
            label input{display:block; margin:0 auto;}
            legend{font:bold 18px 'times new roman'; color:#069; display:block; margin-left:40px; border:1px dotted #000; padding:2px 5px 3px 5px; background:#ccc;}
        </style>
    </head>
    <body><br />
       <form action="uploads/action.php" enctype="multipart/form-data" method="post">
           <fieldset>
               <legend>Sistema de Upload de Arquivos com PHP e MySQL</legend><br />
               <label>
                   <span></span>
                   <input type="file" size="50" name="arquivo" />
               </label>
               <label>
                   <input type="submit" value="Enviar Arquivo" name="enviar_arquivo" style="width:472px;" />
               </label>
           </fieldset>
        <br />
       </form>
    </body>
</html>
