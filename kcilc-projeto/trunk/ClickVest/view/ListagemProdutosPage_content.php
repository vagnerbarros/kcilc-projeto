
<?php 

include 'view/Topo_content.php';
$genero = $args->get('genero');
$categoria = $args->get('categoria');

// esses dois argumentos so terão valor quando a página for recarregada para realizar busca de tam ou cor
$corBusca = $args->get('cor');
$tamanhoBusca = $args->get('tamanho');

$tamanhos = Tamanho::todos();	
$cores = Cor::todas();

?>

<script type="text/javascript">



</script>

<div class="limite">
		
		<div class="content wh92pc mrgL30 content_destaques">
			
			<h3><?php echo $genero?> - <?php echo $categoria?></h3>
			<form method="post" action="<?php echo Proxy::page(ListagemProdutosPage::$NM_PAGINA);?>">
			<div>
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
				<input type="submit">
			</div>
			</form>
			<div class="holder"></div>
				<?php
					$fachada = Fachada::getInstance();
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
					foreach($produtos as $produto){
				?>
			
			
			<ul id="lista_produtos" class="lista_produtos">
			    <li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos[0]->getNomeArquivo();?>" width="140" height="115"/>
					<span class="descricao_prod"><?php echo $produto->getDescricao();?></span><br/>
					<span class="preco_prod">R$ <?php echo $produto->getValor();?></span>
					
					<p class="flag_add_cart"><img alt="" src="template/css/img/flag_add_cart.png" width="150"></p>
					
					</a>
			    </li>
			</ul>
				
				<?php }?>
				
			<div class="holder"></div>
				
		
		</div>
		
		<div class="clr"></div>
		
<?php 
	include 'view/rodape.php';
?>

</div>