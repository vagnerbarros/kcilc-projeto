<?php
 
include 'view/Topo_content.php';
	
$id_produto = $args->get('id');
$fachada = Fachada::getInstance();
$produto = $fachada->cadastroProduto()->buscarId($id_produto);
$fotos = $produto->getFotos();
	
?>

<div class="limite">
	
	<div class="content mrgL30 wh92pc content_detalhar_produto">
	
		<div class="left_detalhar">
			<img alt="" src="<?php echo Constants::$_FOTOS.$fotos->getNomeArquivo();?>" height="250" width="250" />
		</div>
	
		<div class="right_detalhar">
			
			<form action="<?php echo Proxy::action(ReservarProdutoAction::$NM_ACTION);?>" method="post" name="form_reserva">

				<input type="hidden" name="id" value="<?php echo $produto->getId();?>">
			
				<h3><?php echo $produto->getDescricao();?></h3>
				
				<p> <strong> Valor do Aluguel </strong> R$ - <?php echo $produto->getValor();?></p>
			
				<p> <strong> Quantidade Disponível: </strong><?php echo $produto->getQuantidadeEstoque();?></p>
			
				<p> <strong> Gênero: </strong> <?php echo $produto->getGenero();?> </p>
			
				<p> <strong> Categoria: </strong> <?php echo $produto->getCategoria();?> </p>
			
				<p> <a href="javascript:submeterReserva();">Reservar</a> </p>
		
	</form>
			
		</div>
		
	</div>
	
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
	
<?php 
	include 'view/rodape.php';
?>
	
</div>