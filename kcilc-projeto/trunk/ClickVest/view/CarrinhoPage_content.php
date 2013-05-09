<?php 
	include 'view/Topo_content.php';
?>

<div class="limite">
	
	
	<div class="content_lista_carrinho">
		
		<a href="index.php" class="link_escolher_mais">Escolher Mais Produtos</a>
		
		<table class="lista_produtos">
			
			<thead>
				<tr>
					<td width="200">Produto</td>
					<td width="150" align="center">Quantidade</td>
					<td width="150" align="center">Valor</td>
					<td width="10" align="center">Remover</td>
				</tr>
			</thead>
			
			<?php 
			$fachada = Fachada::getInstance();
			$produtos = $fachada->cadastroProduto()->buscarProdutosReservados(SessionManager::getUser()->getId());
			foreach ($produtos as $produto){
			?>	
				
			<tbody>
				<tr>
					<td><?php echo 	$produto->getDescricao();?></td>
					<td align="center">1</td>
					<td align="center"><?php echo $produto->getValor();?></td>
					<td align="center"> <a href="<?php echo Proxy::action(RemoverProdutoCarrinhoAction::$NM_ACTION, array(Proxy::encrypt('id_produto')=>$produto->getId()));?>"> <img alt="" src="template/css/img/remove.png"/> </a> </td>
				</tr>
			</tbody>
			
		<?php }?>
		</table>
		
		<?php if($produtos){?>
					<a class="link_confirmar" href="<?php echo Proxy::action(FecharReservasAction::$NM_ACTION)?>">Confirmar</a>
		<?php }?>
		
	</div>
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
	<br /> <br />
	
<?php 
	include 'view/rodape.php';
?>
	
</div>