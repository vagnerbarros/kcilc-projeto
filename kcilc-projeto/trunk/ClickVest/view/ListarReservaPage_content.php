<?php 
	include 'view/Topo_content.php';
	
?>

<div class="limite">
	
	<div class="content_lista_carrinho">
		
		
		<table class="lista_produtos">
			
			<thead>
				<tr>
					<td width="200">Data</td>
					<td width="50" align="center">Ação</td>
				</tr>
			</thead>
			
			<?php 
			$id = $args->get('id_cliente');
	        $fachada = Fachada::getInstance();
	        $reservas = $fachada->cadastroReserva()->buscarReservaPorIdCliente($id);
	        foreach ($reservas as $reserva){?>
				
			<tbody>
				<tr>
					<td><?php echo $reserva->getData();?></td>
					<td align="center"><a href="<?php echo Proxy::page(DetalharReservaPage::$NM_PAGINA, array(Proxy::encrypt('id_reserva')=>$reserva->getId(), Proxy::encrypt('data')=>$reserva->getData()))?>">Detalhar</a></td>
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
