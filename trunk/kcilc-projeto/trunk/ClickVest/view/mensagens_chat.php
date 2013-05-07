<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="refresh" content="3" />
<title>Chat</title>
<script type="text/javascript">
function rolar() {
    scrollTo(0,100000);
}

</script>


</head>

<body onload="rolar();">

<div class="mensagens">
    <?php 
        $arquivo = fopen("../msg/arquivo.txt", "r");

        if($arquivo){
	        while(!feof($arquivo)){
	            $linha = fgets($arquivo, 500);
	            echo '<p>' . $linha . '</p>';		
	        }
	        fclose($arquivo);
        }
    
    ?>
</div>
</body>

</html>