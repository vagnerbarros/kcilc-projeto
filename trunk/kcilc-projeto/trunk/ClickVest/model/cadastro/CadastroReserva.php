<?php

class CadastroReserva extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroReserva";
	
	public function CadastroReserva($fachada){
		parent::__construct(new RepositorioReserva(), $fachada);
	}
	
	public function cadastrar($reserva, $id_produto){
		
		//uma unidade do produto reservado
		$quantidade = 1;
		
		$produto = $this->fachada->cadastroProduto()->buscarId($id_produto);
		$quantidadeEstoque = $produto->getQuantidadeEstoque();
		if($quantidadeEstoque >= $quantidade){
			
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
	
	public function fecharReserva($id_usuario){
		
		//uma unidade do produto reservado
		$quantidade = 1;
		
		$produtos = $this->fachada->cadastroProduto()->buscarProdutosReservados($id_usuario);
		foreach ($produtos as $produto){
			$quantidadeEstoque = $produto->getQuantidadeEstoque();
		
			//diminui a quantidade de estoque e atualiza no banco
			$produto->setQuantidadeEstoque($quantidadeEstoque - $quantidade);
			$this->fachada->cadastroProduto()->atualizar($produto);
		}
		
		$reservas = $this->repositorio->selectByIdClienteAberta($id_usuario);
		foreach ($reservas as $reserva){
			$reserva->setSituacao(Situacao::$_FECHADO);
			$this->atualizar($reserva);
		}
	}
	
	public function listar(){
		return $this->repositorio->selectAll();
	}
	
	public function buscarReservaPorIdCliente($id_cliente){
		return $this->repositorio->selectByIdCliente($id_cliente);
	}
	
	public function atualizar($reserva){
		$this->repositorio->update($reserva);
	}
	
	public function remover($id_cliente, $id_produto){
		
		$reservas = $this->repositorio->selectByIdClienteProduto($id_cliente, $id_produto);
		$reserva = $reservas[0];
		$this->repositorio->delete($reserva);
		$this->fachada->cadastroProdutoReservado()->remover($reserva->getId(), $id_produto);
	}
}

?>