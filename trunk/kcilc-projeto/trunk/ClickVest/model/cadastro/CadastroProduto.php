<?php

class CadastroProduto extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroProduto";
	
	public function CadastroProduto($fachada){
		parent::__construct(new RepositorioProduto(), $fachada);
	}
	
	public function cadastrar($produto){
		$this->repositorio->create($produto);
	}
	
	public function inativar($id){
		$produto = $this->buscarId($id);
		$produto->setStatus(Constants::$_INATIVO);
		$this->repositorio->update($produto);
	}
	
	public function atualizar($produto){
		$this->repositorio->update($produto);
	}
	
	public function listar(){
		return $this->repositorio->selectAll();
	}
	
	public function buscarId($id){
		return $this->repositorio->selectById($id);
	}
	
	public function buscarProdutosReservados($id_cliente){
		return $this->repositorio->selectByIdReservaCliente($id_cliente);
	}
	
	public function proximoId(){
		return $this->repositorio->nextId();
	}
	
	public function buscarProdutoPorReserva($id_reserva){
		return $this->repositorio->selectByIdReserva($id_reserva);
	}
	
	public function buscarGeneroCategoria($genero, $categoria){
		return $this->repositorio->selectByGeneroCategoria($genero, $categoria);
	}
	
	public function buscarGeneroCategoriaTamanhoCor($genero, $categoria, $tamanho, $cor){
		return $this->repositorio->selectByGeneroCategoriaTamanhoCor($genero, $categoria, $tamanho, $cor);
	}
}

?>