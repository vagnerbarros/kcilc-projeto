<?php 
	include 'view/Topo_content.php';
	$usuario = SessionManager::getUser();
?>

<div class="limite">
	
	<h2>Contato com Atendente</h2>
	<br/><br/><br/>
	<div class="clr"></div>
	<iframe width='500' height='250' frameborder='0' src='view/MensagensChat_content.php'></iframe>
	<iframe width='550' height='100' frameborder='0' src='view/FormChat_content.php' scrolling="no"></iframe>	
	
<?php 
	include 'view/rodape.php';
?>
	
</div>