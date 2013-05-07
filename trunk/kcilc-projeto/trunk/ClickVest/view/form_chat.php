<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Chat</title>
<link href="../template/css/style_form.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="clr"></div>
	<?php 
        // gravação do arquivo 
        if(isset($_POST['mensagem'])){
            $pessoa = $_POST['pessoa'];
            $mensagem = "\n" . $pessoa . ": " . $_POST['mensagem'];
        	$arquivo = fopen("../msg/arquivo.txt", "a"); 
        	fputs($arquivo, $mensagem);
        	fclose($arquivo);
        }
    ?>
	<div class="div_cadastro_usuario">	
		<form class="form_cad" method='POST' action='<?php echo $PHP_SELF ?>' >
	        <label class="wh400">Mensagem:</label>
	        <input class="wh377 epc" id="mensagem" name="mensagem" type="text"/>
	        <input type="hidden" name="pessoa" value="Wolney">
	        <input type="submit" class='btn btn-primary btn-large' value="Enviar"/>
	    </form>
	</div>
	<br /><br /><br /><br />
	<div class="clr"></div>
</body>

</html>