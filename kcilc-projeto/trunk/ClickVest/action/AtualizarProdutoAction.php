<?php 
class AtualizarProdutoAction extends Action {
	
	public static $NM_ACTION = 'AtualizarProdutoAction';
	
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
		$descricao = $form->get('descricao');
		$valor = $form->get('valor');
		$quantidade = $form->get('quantidade');
		
		$produto = $fachada->cadastroProduto()->buscarId($id);
		$produto->setDescricao($descricao);
		$produto->setValor($valor);
		$produto->setQuantidadeEstoque($quantidade);
				
		$fachada->cadastroProduto()->atualizar($produto);
		
		$this->setMessage("Produto atualizado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');		
		$this->setForward(Forward::go(ManterProdutoPage::$NM_PAGINA));
	}
}
?>