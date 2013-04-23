<?php 
	include 'view/Topo_content.php';
	
	$id = $args->get('id_reserva');
	$fachada = Fachada::getInstance();
	$produtos = $fachada->cadastroProduto()->buscarProdutoPorReserva($id);
?>

<div class="limite">

	<?php foreach ($produtos as $produto){ ?>
				<label>Descrição: <?php echo $produto->getDescricao();?></label><br/>
				<label>Valor: <?php echo $produto->getValor();?></label><br/>
				<label>Categoria: <?php echo $produto->getCategoria();?></label><br/>
				<label>Genero: <?php echo $produto->getGenero();?></label><br/>
	<?php }?>

<?php 
	include 'view/rodape.php';
?>

</div>
