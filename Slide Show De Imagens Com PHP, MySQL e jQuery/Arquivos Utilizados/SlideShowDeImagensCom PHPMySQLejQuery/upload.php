<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Upload de Imagens</title>
	</head>
	<body>
    	<form style="width:500px; margin:0 auto;" action="action.php" enctype="multipart/form-data" method="post">
       		<label>
            	<span></span>
                <input type="type" name="link" size="50" />
            </label>
        	<label>
            	<span></span>
                <input type="file" name="arquivo" size="50" />
            </label>
            <label>
                <input type="submit" value="Fazer Upload" />
            </label>
        </form>
	</body>
</html>