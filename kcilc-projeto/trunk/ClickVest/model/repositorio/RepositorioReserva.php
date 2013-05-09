<?php

class RepositorioReserva extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioReserva";

	public function RepositorioReserva(){
		parent::__construct(Reserva::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function selectByIdCliente($id_cliente){
		$keys['id_cliente'] = $id_cliente;
		$keys['situacao'] = Situacao::$_FECHADO;
		$result = $this->select($keys);
		return $result;
	}
	
	public function selectByIdClienteAberta($id_cliente){
		$keys['id_cliente'] = $id_cliente;
		$keys['situacao'] = Situacao::$_ABERTO;
		$result = $this->select($keys);
		return $result;
	}
	
	public function selectByIdClienteProduto($id_cliente, $id_produto){
		$produto_reservado = Constants::$_BASE.".".Constants::$_NAMESPACE.ProdutoReservado::$NM_ENTITY." pr";
		$reserva = Constants::$_BASE.".".Constants::$_NAMESPACE.Reserva::$NM_ENTITY." r";
		$query = "SELECT r.* FROM $reserva, $produto_reservado WHERE r.status = '".Constants::$_ATIVO."' AND pr.status = '".Constants::$_ATIVO."' AND
		 	pr.id_produto =:id_produto AND r.id = pr.id_reserva AND r.id_cliente=:id_cliente AND r.situacao = '".Situacao::$_ABERTO."'";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_produto", $id_produto);
		$result->bindValue(":id_cliente", $id_cliente);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
	
	public function selectAll(){
		$reserva = Constants::$_BASE.".".Constants::$_NAMESPACE.Reserva::$NM_ENTITY;
		$query = "SELECT * FROM $reserva WHERE status = '".Constants::$_ATIVO."'";
		$result = ConexaoBD::prepare($query);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			$reserva = Reserva::fromArray($item);
			array_push($objs, $reserva);
		}
		return $objs;
	}
}

?>