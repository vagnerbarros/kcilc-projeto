<?php

class FecharReservasAction extends Action {

	public static $NM_ACTION = 'FecharReservasAction';

	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}

	public function permissions(){
		$this->allow(ACL::$ACL_CLIENTE);
	}

	public function run($form){

		$fachada = Fachada::getInstance();
		$usuario = SessionManager::getUser();
		$fachada->cadastroReserva()->fecharReserva($usuario->getId());
		
		$this->setMessage("Reservas confirmadas com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');
		$this->setForward(Forward::go(HomePage::$NM_PAGINA));
	}
}
?>