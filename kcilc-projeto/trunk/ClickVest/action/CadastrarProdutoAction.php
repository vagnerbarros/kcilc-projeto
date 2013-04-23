<?php
class CadastrarProdutoAction extends Action {

	public static $NM_ACTION = 'CadastrarProdutoAction';

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
		
		$fachada = Fachada::getInstance();
		
		$descricao = $form->get('descricao');
		$arquivos = $form->get('pic');
		$valor = $form->get('valor');
		$quantidade = $form->get('quantidade');
		$categoria = $form->get('categoria');
		$genero = $form->get('genero');
		$produto = new Produto(null, $quantidade, $descricao, $valor, $categoria, $genero, Constants::$_ATIVO);
		
		$idProduto = $fachada->cadastroProduto()->proximoId();
		$fachada->cadastroProduto()->cadastrar($produto);
		$fachada->cadastroFotoProduto()->cadastrarFotos($arquivos, $idProduto);
		
			
		$this->setMessage("Produto cadastrado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');
		$this->setForward(Forward::go(CadastrarProdutoPage::$NM_PAGINA));
		
	}
}
?>