
<?php 

include 'view/Topo_content.php';
$genero = $args->get('genero');
$categoria = $args->get('categoria');
$descricao = $args->get('descricao');

// esses dois argumentos so terão valor quando a página for recarregada para realizar busca de tam ou cor
$corBusca = $args->get('cor');
$tamanhoBusca = $args->get('tamanho');

$tamanhos = Tamanho::todos();	
$cores = Cor::todas();

?>

<script type="text/javascript">



</script>

<div class="limite">
		
		<div class="clr"></div>
		
		<div class="content wh92pc mrgL30 content_destaques">
			
			<?php if($descricao==null){ ?>
			          <h3><?php echo $genero?> - <?php echo $categoria?></h3>
			<?php }else{ ?>
			          <h3>Busca por: <?php echo $descricao?></h3>
			<?php }?>
			
			<form method="post" action="<?php echo Proxy::page(ListagemProdutosPage::$NM_PAGINA);?>">
				<input type="hidden" name="genero" value="<?php echo $genero?>">
				<input type="hidden" name="categoria" value="<?php echo $categoria?>">
				
				<select name="cor">
					<?php foreach ($cores as $cor){?>
					<option value="<?php echo $cor?>"><?php echo $cor?></option>
					<?php }?>
				</select>
				<select name="tamanho">
					<?php foreach ($tamanhos as $tamanho){?>
					<option value="<?php echo $tamanho?>"><?php echo $tamanho?></option>
					<?php }?>
				</select>
				<input type="submit" value="Pesquisar">

			</form>
			
				<?php
					$fachada = Fachada::getInstance();
					if($descricao != null){
						$produtos = $fachada->cadastroProduto()->buscarDescricao($descricao);
					}else{
						
					if($genero == null && $categoria == null){
						$produtos = $fachada->cadastroProduto()->listar();
					} 
					else{
						if($corBusca != null  && $tamanhoBusca != null){
							$produtos = $fachada->cadastroProduto()->buscarGeneroCategoriaTamanhoCor($genero, $categoria, $tamanhoBusca, $corBusca);
						}
						else{
							$produtos = $fachada->cadastroProduto()->buscarGeneroCategoria($genero, $categoria);
						}
					}
					
					}
				?>
			
			
			<ul id="lista_produtos" class="lista_produtos">
			    <?php foreach($produtos as $produto){?>
			    <li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos[0]->getNomeArquivo();?>" width="150" height="185"/>
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