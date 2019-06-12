<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
$para = "para@para.com.br";
$de = "de@de.com.br";
$assunto = "assunto";
$headers = "MIME-Version: 1.0 \n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From:$de \n";
$mensagem = "mensagem aqui, pode ser HTML devido ao header acima";

if(mail($para _2, $assunto , $mensagem, $headers)){
echo "e-mail enviado com sucesso";
}else{
echo "erro ao enviar o e-mail";
}[/b]
</body>
</html>
