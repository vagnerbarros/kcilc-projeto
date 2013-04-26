<?php

class RepositorioProduto extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioProduto";

	public function RepositorioProduto(){
		parent::__construct(Produto::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function selectByIdReservaCliente($id_cliente){
		$reserva = Constants::$_BASE.".".Constants::$_NAMESPACE.Reserva::$NM_ENTITY." r";
		$produto_reservado = Constants::$_BASE.".".Constants::$_NAMESPACE.ProdutoReservado::$NM_ENTITY." pr";
		$produto = Constants::$_BASE.".".Constants::$_NAMESPACE.Produto::$NM_ENTITY." p";
		$query = "SELECT p.* FROM $produto, $produto_reservado, $reserva WHERE p.status = '".Constants::$_ATIVO."' AND pr.status = '".Constants::$_ATIVO."' AND r.status = '".Constants::$_ATIVO."' AND
		 	r.id_cliente =:id_cliente AND r.id = pr.id_reserva AND pr.id_produto = p.id";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_cliente", $id_cliente);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
	
	public function selectByGeneroCategoria($genero, $categoria){
		$keys['genero'] = $genero;
		$keys['categoria'] = $categoria;
		$result = $this->select($keys);
		return $result;
	}
	
	public function selectByIdReserva($id_reserva){
		$produto_reservado = Constants::$_BASE.".".Constants::$_NAMESPACE.ProdutoReservado::$NM_ENTITY." pr";
		$produto = Constants::$_BASE.".".Constants::$_NAMESPACE.Produto::$NM_ENTITY." p";
		$query = "SELECT p.* FROM $produto, $produto_reservado WHERE p.status = '".Constants::$_ATIVO."' AND pr.status = '".Constants::$_ATIVO."' AND
		 	pr.id_reserva =:id_reserva AND pr.id_produto = p.id";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_reserva", $id_reserva);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
	
	//funчуo auxiliar para buscar as fotos de um produto
	private function selectFotosProduto($id_produto){
		
		$foto_produto = Constants::$_BASE.".".Constants::$_NAMESPACE.FotoProduto::$NM_ENTITY;
		$query = "SELECT * FROM $foto_produto WHERE status = '".Constants::$_ATIVO."' AND id_produto = :id_produto";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_produto", $id_produto);
		$result->execute();
		$this->reportErrors($result);
		return $this->mountFotoProduto($result);
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			$produto = Produto::fromArray($item);
			$fotos = $this->selectFotosProduto($produto->getId());
			$produto->setFotos($fotos);
			array_push($objs, $produto);
		}
		return $objs;
	}
	public function mountFotoProduto($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()){
			$fotosProduto = new FotoProduto($item['id'], $item['nome_arquivo'], $item['id_produto'], $item['status']);
			array_push($objs, $fotosProduto);
		}
		return $objs;
	}
}

?>