<?php 
include 'view/Topo_content.php';

$fachada = Fachada::getInstance();
$produtos = $fachada->cadastroProduto()->listar();

?>
<div class="limite">
            
     <div class="content_lista_carrinho">
		
		
		<table class="lista_produtos">
			
			<thead>
				<tr>
					<td width="200">Produto</td>
					<td width="75" align="center">Valor</td>
					<td width="75" align="center">Genero</td>
					<td width="75" align="center">Cor</td>
					<td width="75" align="center">Categoria</td>
					<td width="10" align="center">Tamanho</td>
				</tr>
			</thead>
			
			<?php 
			$fachada = Fachada::getInstance();
            $produtos = $fachada->cadastroProduto()->listar();
            foreach ($produtos as $produto){
			?>	
				
			<tbody>
				<tr>
					<td><?php echo $produto->getDescricao();?></td>
					<td align="center"><?php echo $produto->getValor();?></td>
					<td align="center"><?php echo $produto->getGenero();?></td>
					<td align="center"><?php echo $produto->getCor();?></td>
					<td align="center"><?php echo $produto->getCategoria();?></td>
					<td align="center"><?php echo $produto->getTamanho();?></td>
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
