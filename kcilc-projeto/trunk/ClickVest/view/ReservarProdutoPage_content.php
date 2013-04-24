<?php 
	include 'view/Topo_content.php';
	
	$id = $args->get('id');
	$fachada = Fachada::getInstance();
	$produto = $fachada->cadastroProduto()->buscarId($id);
?>

<div class="limite">
	
	

<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />

<?php 
	include 'view/rodape.php';
?>

</div>
