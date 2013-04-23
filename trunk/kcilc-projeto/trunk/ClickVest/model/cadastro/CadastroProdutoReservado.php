<?php

class CadastroProdutoReservado extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroProdutoReservado";
	
	public function CadastroProdutoReservado($fachada){
		parent::__construct(new RepositorioProdutoReservado(), $fachada);
	}
	
	public function cadastrar($produto_reservado){
		$this->repositorio->create($produto_reservado);
	}
	
	public function buscarPorIdClienteReserva($id_cliente){
		return $this->repositorio->selectByIdClienteReserva($id_cliente);
	}
}

?>