<?php 
	include 'view/Topo_content.php';
	$usuario = SessionManager::getUser();
?>

<div class="limite">
	
	<h2>Contato com Atendente</h2>
	<br/><br/><br/>
	<div class="clr"></div>
	<iframe width='500' height='250' frameborder='0' src='view/MensagensChat_content.php'></iframe>
	<?php if(SessionManager::getUser()->getPerfil() == ACL::$ACL_FUNCIONARIO){ ?>
	<iframe width='550' height='100' frameborder='0' src='view/FormChatAdminPage_content.php' scrolling="no"></iframe>	
	<?php }else if(SessionManager::getUser()->getPerfil() == ACL::$ACL_CLIENTE){?>
	<iframe width='550' height='100' frameborder='0' src='view/FormChatPage_content.php' scrolling="no"></iframe>
	<?php }?>
	
<?php 
	include 'view/rodape.php';
?>
	
</div>