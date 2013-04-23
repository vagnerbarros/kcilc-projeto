<?php 
class LogoutAction extends Action {
	
	public static $NM_ACTION = 'LogoutAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::allButOne(ACL::$ACL_USUARIO));
	}

	public function run($form){ 

		$this->load('10%');
		$lang = Messages::$PT_br;
		
		$this->load('30%');
		$usr_name = SessionManager::getUser()->getNome();
		
		$this->load('50%');
		SessionManager::cleanUser();
		
		$this->load('70%');
		SessionManager::clean();
		
		$this->load('90%');
		$this->setMessage(str_replace(":usr", $usr_name, Messages::get($lang, Messages::$MSG_USUARIO_DESLOGADO)) , Constants::$_MSG_SUCCESS);
			
		$this->load('100%');
		$this->setForward(HomePage::$NM_PAGINA);
				
		
	}
}
?>