<?php

class CadastroReserva extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroReserva";
	
	public function CadastroReserva($fachada){
		parent::__construct(new RepositorioReserva(), $fachada);
	}
	
	public function cadastrar($reserva, $id_produto, $quantidade){
		
		$produto = $this->fachada->cadastroProduto()->buscarId($id_produto);
		$quantidadeEstoque = $produto->getQuantidadeEstoque();
		if($quantidadeEstoque >= $quantidade){
			
			//diminui a quantidade de estoque e atualiza no banco
			$produto->setQuantidadeEstoque($quantidadeEstoque - $quantidade);
			$this->fachada->cadastroProduto()->atualizar($produto);
			
			//insere a reserva no banco
			$id_reserva = $this->repositorio->nextId();
			$reserva->setId($id_reserva);
			$this->repositorio->create($reserva);

			//insere o produto reservado.
			$produtoReservado = new ProdutoReservado($id_reserva, $produto->getId(), $quantidade, Constants::$_ATIVO);
			$this->fachada->cadastroProdutoReservado()->cadastrar($produtoReservado);
		}
		else{
			throw new QuantidadeInsuficienteException();
		}
	}
	
	public function listar(){
		return $this->repositorio->selectAll();
	}
	
	public function buscarReservaPorIdCliente($id_cliente){
		return $this->repositorio->selectByIdCliente($id_cliente);
	}
}

?>