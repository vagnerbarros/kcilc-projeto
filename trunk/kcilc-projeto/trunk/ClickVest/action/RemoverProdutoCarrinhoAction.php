<?php 

class RemoverProdutoCarrinhoAction extends Action {
	
	public static $NM_ACTION = 'RemoverProdutoCarrinhoAction';
	
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

		//TODO
		
		$fachada = Fachada::getInstance();
		
		$id_produto = $form->get('id_produto');
		$id_usuario = SessionManager::getUser()->getId();

		$fachada->cadastroReserva()->remover($id_usuario, $id_produto);
		
		$this->setMessage("Produto removido com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');
		$this->setForward(Forward::go(CarrinhoPage::$NM_PAGINA));
	}
}
?>