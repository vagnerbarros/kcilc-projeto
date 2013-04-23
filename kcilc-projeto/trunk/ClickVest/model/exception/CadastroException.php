<?php 
class CadastroException extends Exception {

	public function CadastroException($cadastro, $msg){
		parent::__construct("[".$cadastro->$NM_CADASTRO."] ".$msg, -1);
	}
	
}
?>