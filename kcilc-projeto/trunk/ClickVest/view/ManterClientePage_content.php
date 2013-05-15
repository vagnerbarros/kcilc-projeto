<?php 
include 'view/Topo_content.php';



?>
<div class="limite">
			
	<div class="content_lista_carrinho">
		
		
		<table class="lista_produtos">
			
			<thead>
				<tr>
					<td width="200">Nome</td>
					<td width="150" align="center">Telefone</td>
					<td width="150" align="center">E-mail</td>
					<td width="10" align="center">CPF</td>
				</tr>
			</thead>
			
			<?php 
			$fachada = Fachada::getInstance();
            $clientes = $fachada->cadastroUsuario()->listarClientes();
            foreach ($clientes as $cliente){
			?>	
				
			<tbody>
				<tr>
					<td><?php echo $cliente->getNome();?></td>
					<td align="center"><?php echo $cliente->getTelefone();?></td>
					<td align="center"><?php echo $cliente->getEmail();?></td>
					<td align="center"><?php echo $cliente->getCpf();?></td>
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
