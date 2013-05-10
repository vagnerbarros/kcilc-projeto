<?php
 
	
$id_produto = $args->get('id');
$fachada = Fachada::getInstance();
$produto = $fachada->cadastroProduto()->buscarId($id_produto);
$fotos = $produto->getFotos();

include 'view/Topo_content.php';
?>

<div class="limite">
	
	<div class="content mrgL30 wh92pc content_detalhar_produto">
	
		<div class="left_detalhar">
		    <div id="image">
		        <a href="<?php echo Constants::$_FOTOS.$fotos[0]->getNomeArquivo();?>" class="amplia" title="ClickVest">
			        <img alt="" src="<?php echo Constants::$_FOTOS.$fotos[0]->getNomeArquivo();?>" height="250" width="250" />
		        </a>
		    </div>
		    <?php $i = 1; ?>
		    <?php foreach ($fotos as $foto){ ?>
		        <a href="#" rel="<?php echo Constants::$_FOTOS.$foto->getNomeArquivo();?>" class="imagem" id="<?php echo $i;?>">
			       <img width="60" height="60" src="<?php echo Constants::$_FOTOS.$foto->getNomeArquivo();?>" class="thumb<?php echo $i;?>" title="<?php echo $foto->getNomeArquivo();?>"/>
			    </a>
			<?php $i++; ?>
		    <?php } ?>
		</div>
	
		<div class="right_detalhar">
			
			<form action="<?php echo Proxy::action(ReservarProdutoAction::$NM_ACTION);?>" method="post" name="form_reserva">

				<input type="hidden" name="id" value="<?php echo $produto->getId();?>">
			
				<h3><?php echo $produto->getDescricao();?></h3>
				
				<p> <strong> Valor do Aluguel </strong> R$ <?php echo $produto->getValor();?></p>
			
				<p> <strong> Quantidade Disponível: </strong><?php echo $produto->getQuantidadeEstoque();?></p>
			
				<p> <strong> Gênero: </strong> <?php echo $produto->getGenero();?> </p>
			
				<p> <strong> Categoria: </strong> <?php echo $produto->getCategoria();?> </p>
				
				<p> <strong> Tamanho: </strong> <?php echo $produto->getTamanho();?> </p>
			
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