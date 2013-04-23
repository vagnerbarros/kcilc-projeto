<?php 
	include 'view/Topo_content.php';
	
	$id = $args->get('id_cliente');
	$fachada = Fachada::getInstance();
	$reservas = $fachada->cadastroReserva()->buscarReservaPorIdCliente($id);
?>

<div class="limite">

	<?php foreach ($reservas as $reserva){ ?>
				<label><?php echo $reserva->getData();?></label>
				<a href="<?php echo Proxy::page(DetalharReservaPage::$NM_PAGINA, array(Proxy::encrypt('id_reserva')=>$reserva->getId()))?>">Detalhar</a>	
	<?php }?>

<?php 
	include 'view/rodape.php';
?>

</div>
