<?php

class ReservarProdutoAction extends Action {

	public static $NM_ACTION = 'ReservarProdutoAction';

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

		$idProduto = $form->get('id');
		$usuario = SessionManager::getUser();

		$reserva = new Reserva(null, $usuario->getId(), date("Y-m-d"), Situacao::$_ABERTO, Constants::$_ATIVO);

		try{
			
			$fachada->cadastroReserva()->cadastrar($reserva, $idProduto);

			$this->setMessage("Produto reservado com sucesso.", Constants::$_MSG_SUCCESS);
			$this->load('100%');
			$this->setForward(Forward::go(HomePage::$NM_PAGINA.'&msg_carrinho=ok'));
		}
		catch(QuantidadeInsuficienteException $e){
			
			$this->setMessage("Quantidade insuficiente no estoque.", Constants::$_MSG_SUCCESS);
			$this->load('100%');
			$this->setForward(Forward::go(ReservarProdutoPage::$NM_PAGINA));
		}
	}
}
?>