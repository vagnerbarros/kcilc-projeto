<?php 

class RemoverProdutoAction extends Action {
	
	public static $NM_ACTION = 'RemoverProdutoAction';
	
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
	}

	public function run($form){ 

		//TODO
		
		$fachada = Fachada::getInstance();
		
		$id = $form->get('id');
		
		$fachada->cadastroProduto()->inativar($id);
		
		$this->setMessage("Produto removido com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');
		$this->setForward(Forward::go(ManterProdutoPage::$NM_PAGINA));
	}
}
?>