<?php require_once "lib/securimage/securimage.php"?>
<?php 
class AtualizarUsuarioAction extends Action {
	
	public static $NM_ACTION = 'AtualizarUsuarioAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::$ACL_FUNCIONARIO);
		$this->allow(ACL::$ACL_ADMIN);
	}

	public function run($form){ 

		//TODO
		$fachada = Fachada::getInstance();
		
		$id = $form->get('id');
		$nome = $form->get('nome');
		$senha = $form->get('senha');
		
		$usuario = $fachada->cadastroUsuario()->buscarId($id);
		$usuario->setNome($nome);
		$usuario->setSenha($senha);
				
		$fachada->cadastroUsuario()->atualizar($usuario);
		
		$this->setMessage("Usuario atualizado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');		
		$this->setForward(Forward::go(ManterClientePage::$NM_PAGINA));
	}
}
?>