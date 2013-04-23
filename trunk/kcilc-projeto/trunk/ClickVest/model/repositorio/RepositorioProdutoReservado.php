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
		 	r.id_cliente =:id_cliente AND r.id = pr.id_reserva";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_cliente", $id_cliente);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
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