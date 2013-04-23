<?php 
include 'view/Topo_content.php';

$id = $args->get('id');
$fachada = Fachada::getInstance();
$usuario = $fachada->cadastroUsuario()->buscarId($id);

?>
<div class="limite">

	<div id="div_dados" class="wh445 mrgL30">
			
			<?php 		
			include 'view/form/AtualizarPerfilForm.php';
			?>
				
	</div>

<?php 
	include 'view/rodape.php';
?>

</div>
