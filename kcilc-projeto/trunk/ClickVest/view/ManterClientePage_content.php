<?php 
include 'view/Topo_content.php';

$fachada = Fachada::getInstance();
$clientes = $fachada->cadastroUsuario()->listarClientes();

?>
<div class="limite">

			<ul>
				<li><td>&nbsp&nbsp&nbsp Clientes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<?php foreach ($clientes as $cliente){?>
				<li><td><?php echo $cliente->getNome();?></td>
				<a href="<?php echo Proxy::page(AtualizarUsuarioPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$cliente->getId()));?>">Editar</a>
				<a href="<?php echo Proxy::action(RemoverClienteAction::$NM_ACTION, array(Proxy::encrypt('id')=>$cliente->getId()));?>">Remover</a></li>
				
			<?php }?>
				</li>
				<br>
				<br>
				<br>
				<br>
				<br>
				<a id="internal" href="<?php echo Proxy::page(CadastroUsuarioPage::$NM_PAGINA)?>">+ Cadastrar Cliente</a>
			</ul>

<?php 
	include 'view/rodape.php';
?>

</div>
