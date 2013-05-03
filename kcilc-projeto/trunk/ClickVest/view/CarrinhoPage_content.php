<?php 
	include 'view/Topo_content.php';
?>

<div class="limite">
	<div class="content_lista_carrinho">
		<table border="1">
			<thead>
			<?php 
			$fachada = Fachada::getInstance();
			$produtos = $fachada->cadastroProduto()->buscarProdutosReservados(SessionManager::getUser()->getId());
			foreach ($produtos as $produto){
			?>
				<tr>
					<td><?php echo 	$produto->getDescricao();?></td>
					<td><?php echo $produto->getValor();?></td>
				</tr>
		<?php }?>
			</thead>
		</table>
		<?php if($produtos){?>
					<a href="<?php echo Proxy::action(FecharReservasAction::$NM_ACTION)?>">Confirmar</a>
		<?php }?>
	</div>
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
	
<?php 
	include 'view/rodape.php';
?>
	
</div>