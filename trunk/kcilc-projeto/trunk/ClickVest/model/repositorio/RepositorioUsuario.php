<?php

class RepositorioUsuario extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioUsuario";

	public function RepositorioUsuario(){
		parent::__construct(Usuario::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function retrieveByEmailSenha($email, $senha){
		$keys['email'] = $email;
		$keys['senha'] = $senha;
		$set = parent::select($keys);
		return $set[0];
	}
	
	public function selectByPerfil($perfil){
		$keys['perfil'] = $perfil;
		$set = parent::select($keys);
		return $set;
	}
	
	//retorna todos os usuarios que possuem reserva ativa ordenados por data de reserva 
	public function selectByReservaAtiva(){
		
		$reserva = Constants::$_BASE.".".Constants::$_NAMESPACE.Reserva::$NM_ENTITY;
		$usuario = Constants::$_BASE.".".Constants::$_NAMESPACE.Usuario::$NM_ENTITY;
		
		$query = "SELECT * FROM $usuario WHERE status = '".Constants::$_ATIVO."' AND
		 	id = (SELECT DISTINCT(id_cliente) FROM $reserva WHERE situacao = '".Situacao::$_FECHADO."' AND status = '".Constants::$_ATIVO."' ORDER BY data DESC)";
		$result = ConexaoBD::prepare($query);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, Usuario::fromArray($item));
		}
		return $objs;
	}
}

?>