<?php
class ChatAction extends Action {

	public static $NM_ACTION = 'ChatAction';

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
		$this->allow(ACL::$ACL_CLIENTE);
	}

	public function run($form){
		
        $arquivo = fopen("msg/arquivo.txt", "a"); 
        if($arquivo){
            $pessoa = $form->get('pessoa');
            $mensagem = "\n" . $pessoa . ": " . $form->get('mensagem');
            fputs($arquivo, $mensagem);
            fclose($arquivo);
        }
		
			
		$this->setMessage("Produto cadastrado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');
		$this->setForward(Forward::go(ChatPage::$NM_PAGINA));
		
	}
}
?>