<?php 
	include 'view/Topo_content.php';
?>

<div class="limite">
	
	
	<div class="content_lista_carrinho">
		
		
		<table class="lista_produtos">
			
			<thead>
				<tr>
					<td width="200">Produto</td>
					<td width="150" align="center">Quantidade</td>
					<td width="150" align="center">Valor</td>
					<td width="10" align="center">Data</td>
				</tr>
			</thead>
			
			<?php 
			$fachada = Fachada::getInstance();
			$produtos = $fachada->cadastroProduto()->buscarHistoricoProdutosReservados(SessionManager::getUser()->getId());
			foreach ($produtos as $produto){
			?>	
				
			<tbody>
				<tr>
					<td><?php echo 	$produto->getDescricao();?></td>
					<td align="center">1</td>
					<td align="center"><?php echo $produto->getValor();?></td>
					<td align="center">04/04/2013</td>
				</tr>
			</tbody>
			
		<?php }?>
		</table>
		
	</div>
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
	<br /> <br />
	<div class="clr"></div>
<?php 
	include 'view/rodape.php';
?>
	
</div>