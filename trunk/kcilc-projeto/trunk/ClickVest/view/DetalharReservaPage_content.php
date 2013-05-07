<?php 
	include 'view/Topo_content.php';
	
	$id = $args->get('id_reserva');
	$fachada = Fachada::getInstance();
	$produtos = $fachada->cadastroProduto()->buscarProdutoPorReserva($id);
	$data = $args->get('data');
?>

<div class="limite">
	<h1>Data da Reserva: <?php echo $data?></h1>
	<?php foreach ($produtos as $produto){ ?>
				<label>Descrição: <?php echo $produto->getDescricao();?></label><br/>
				<label>Valor: <?php echo $produto->getValor();?></label><br/>
				<label>Categoria: <?php echo $produto->getCategoria();?></label><br/>
				<label>Genero: <?php echo $produto->getGenero();?></label><br/>
				<label>Tamanho: <?php echo $produto->getTamanho();?></label><br/>
				<label>Cor: <?php echo $produto->getCor();?></label><br/>
	<?php }?>

<?php 
	include 'view/rodape.php';
?>

</div>
