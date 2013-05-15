<?php 
include 'view/Topo_content.php';
?>
<div class="limite">
		
    <div class="content_lista_carrinho">
		
		
		<table class="lista_produtos">
			
			<thead>
				<tr>
					<td width="200">Cliente</td>
					<td width="50" align="center">Ação</td>
				</tr>
			</thead>
			
			<?php 
			$fachada = Fachada::getInstance();
            $clientes = $fachada->cadastroUsuario()->listarClientesComReservas();
            foreach ($clientes as $cliente){?>
				
			<tbody>
				<tr>
					<td><?php echo $cliente->getNome();?></td>
					<td align="center"><a href="<?php echo Proxy::page(ListarReservaPage::$NM_PAGINA, array(Proxy::encrypt('id_cliente')=>$cliente->getId()))?>">Ver Reservas</a></td>
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
