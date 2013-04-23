<?php 
include 'view/Topo_content.php';

$usuario = SessionManager::getUser();

if($usuario){
?>
<div class="limite">
	
	<h2>Meu Cadastro |</h2>
	
	<div class="links_edit">
		<a id="open" style="z-index: 1000">Editar Cadastro :.</a>
		<a id="close" style="display: none;">.: Cancelar Edição</a>
	</div>
		
	<div class="clr"></div>
		
		<div id="div_dados" class="wh445 mrgL30">
				
			<ul class="lista_cadastro">
				
				<li class="tit">Nome:</li>
				<li class="lbl"><?php echo $usuario->getNome();?></li>
				
				<li class="tit">CPF:</li>
				<li class="lbl"><?php echo $usuario->getCpf();?></li>
				
				<li class="tit">RG:</li>
				<li class="lbl"><?php echo $usuario->getRg();?></li>
				
				<li class="tit">CEP:</li>
				<li class="lbl"><?php echo $usuario->getCep();?></li>
				
				<li class="tit">Endereço:</li>
				<li class="lbl"><?php echo $usuario->getRua();?> - <?php echo $usuario->getNumero();?> - <?php echo $usuario->getBairro();?> - <?php echo $usuario->getCidade();?> - <?php echo $usuario->getEstado();?></li>
				
				<li class="tit">Complemento:</li>
				<li class="lbl"><?php echo $usuario->getComplemento();?></li>
				
				<li class="tit">Email:</li>
				<li class="lbl"><?php echo $usuario->getEmail();?></li>
				
				<li class="tit">Telefone:</li>
				<li class="lbl"><?php echo $usuario->getTelefone();?></li>
				
				<li class="tit">Celular:</li>
				<li class="lbl"><?php echo $usuario->getCelular();?></li>
			
			
			</ul>
				
		</div>
		
		<div class="wh445 mrgL15" id="div_form_atualizar">
			
			<?php 		
			include 'view/form/AtualizarPerfilForm.php';
			?>
				
		</div>
		
		<div class="clr"></div>
		
		<br/>
		<br/>
		
	<?php 
	include 'view/rodape.php';
	?>

</div>

<?php 
}
?>