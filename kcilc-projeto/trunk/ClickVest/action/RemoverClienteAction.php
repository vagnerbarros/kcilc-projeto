<?php 

class RemoverClienteAction extends Action {
	
	public static $NM_ACTION = 'RemoverClienteAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::$ACL_ADMIN);
		$this->allow(ACL::$ACL_FUNCIONARIO);
	}

	public function run($form){ 

		//TODO
		
		$fachada = Fachada::getInstance();
		
		$id = $form->get('id');
		
		$fachada->cadastroUsuario()->inativar($id);
		
		$this->setMessage("Cliente removido com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');
		$this->setForward(Forward::go(ManterClientePage::$NM_PAGINA));
	}
}
?>