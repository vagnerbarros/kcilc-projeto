<?php

class RepositorioProdutoReservado extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioProdutoReservado";

	public function RepositorioProdutoReservado(){
		parent::__construct(ProdutoReservado::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$keys['ativo'] = Constants::$_ATIVO;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function selectByIdClienteReserva($id_cliente){
		$reserva = Constants::$_BASE.".".Constants::$_NAMESPACE.Reserva::$NM_ENTITY." r";
		$produto_reservado = Constants::$_BASE.".".Constants::$_NAMESPACE.ProdutoReservado::$NM_ENTITY." pr";
		$query = "SELECT pr.* FROM $produto_reservado, $reserva WHERE pr.status = '".Constants::$_ATIVO."' AND r.status = '".Constants::$_ATIVO."' AND
		 	r.id_cliente =:id_cliente AND r.id = pr.id_reserva AND r.situacao = '".Situacao::$_ABERTO."'";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_cliente", $id_cliente);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
	
	public function remover($id_reserva, $id_produto){
		$produto_reservado = Constants::$_BASE.".".Constants::$_NAMESPACE.ProdutoReservado::$NM_ENTITY;
		$query = "UPDATE $produto_reservado SET status = '".Constants::$_INATIVO."'
		 WHERE id_reserva =:id_reserva AND id_produto =:id_produto";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_reserva", $id_reserva);
		$result->bindValue(":id_produto", $id_produto);
		
		$stts = $result->execute();
		$this->reportErrors($result);
		return $stts;
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, ProdutoReservado::fromArray($item));
		}
		return $objs;
	}
}

?>