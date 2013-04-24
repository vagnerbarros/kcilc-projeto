
<?php 

include 'view/Topo_content.php';
$genero = $args->get('genero');
$categoria = $args->get('categoria');	
	
?>

<div class="limite">
		
		<div class="content wh92pc mrgL30 content_destaques">
			
			<h3><?php echo $genero?> - <?php echo $categoria?></h3>
			
			<ul class="lista_produtos" id="lista_produtos">
				
				<?php
					$fachada = Fachada::getInstance();
					if($genero == null && $categoria == null){
						$produtos = $fachada->cadastroProduto()->listar();
					} 
					else{
						$produtos = $fachada->cadastroProduto()->buscarGeneroCategoria($genero, $categoria);
					}
					foreach($produtos as $produto){
				?>
				
				<li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos->getNomeArquivo();?>" width="140" height="115"/>
					<span class="descricao_prod"><?php echo $produto->getDescricao();?></span><br/>
					<span class="preco_prod">R$ <?php echo $produto->getValor();?></span>
					
					<p class="flag_add_cart"><img alt="" src="template/css/img/flag_add_cart.png" width="150"></p>
					
					</a>
				</li>
				
				<?php }?>
				
				
			</ul>
		
		</div>
		
		<div class="clr"></div>
		
<?php 
	include 'view/rodape.php';
?>

</div>