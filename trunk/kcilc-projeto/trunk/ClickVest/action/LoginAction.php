<?php 
class LoginAction extends Action {
	
	public static $NM_ACTION = 'LoginAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::all());
	}

	public function run($form){ 

		$lang = Messages::$PT_br;
		$email = $form->get('email');
		$senha = $form->get('senha');
		$fachada = Fachada::getInstance();
		
		try{
			
		$usuario = $fachada->cadastroUsuario()->logar($email, $senha);
		SessionManager::setUser($usuario);
		$this->load('100%');
		$this->setForward(Forward::go(HomePage::$NM_PAGINA));
		
		} catch (EmailSenhaIncorretaException $e){
			
		}
	}
}
?>