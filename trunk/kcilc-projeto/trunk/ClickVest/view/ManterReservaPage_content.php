<?php 
include 'view/Topo_content.php';

$fachada = Fachada::getInstance();
$clientes = $fachada->cadastroUsuario()->listarClientesComReservas();

?>
<div class="limite">
			<?php
			if($clientes){
				
				foreach ($clientes as $cliente){?>
				<div>
						<label>Nome do Cliente:</label>
						<a href="<?php echo Proxy::page(ListarReservaPage::$NM_PAGINA, array(Proxy::encrypt('id_cliente')=>$cliente->getId()))?>"><?php echo $cliente->getNome();?></a>
						<br/> 
				</div>
				<?php 
				}
			}
			else{?>
				
				<div>
					<br/>
					<br/>
					<br/>
					<label>Nenhuma Reserva Existente</label>
					<br/>
					<br/>
					<br/>
				</div>
		<?php 	}?>

<?php 
	include 'view/rodape.php';
?>

</div>
