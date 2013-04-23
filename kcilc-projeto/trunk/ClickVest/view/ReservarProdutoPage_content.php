<?php 
	include 'view/Topo_content.php';
	
	$id = $args->get('id');
	$fachada = Fachada::getInstance();
	$produto = $fachada->cadastroProduto()->buscarId($id);
?>

<div class="limite">
	
	<form action="<?php echo Proxy::action(ReservarProdutoAction::$NM_ACTION);?>" method="post">
		<label>Descrição: <?php echo $produto->getDescricao();?></label><br>
		<label>Valor: <?php echo $produto->getValor();?></label><br>
		<label>Quantidade em Estoque: <?php echo $produto->getQuantidadeEstoque();?></label><br>
		<br><br><br><br>
		<label>Quantidade Reserva:</label>
		<select id='<?php echo Proxy::encrypt('quantidade');?>' name ="<?php echo Proxy::encrypt('quantidade');?>" onfocus='ajuda(this, "ajuda_assunto");'>
			<?php for ($i = 1; $i <= $produto->getQuantidadeEstoque(); $i++){?>
						<option value='<?php echo $i?>'><?php echo $i?></option>
			<?php }?>
		</select>
		<input type="hidden" name="id" value="<?php echo $produto->getId();?>">
		<button type="submit" class='btn btn-primary btn-large'><?php Messages::printStr(Messages::$PT_br, Messages::$STR_ENVIAR)?> &raquo;</button>
	</form>

<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />

<?php 
	include 'view/rodape.php';
?>

</div>
