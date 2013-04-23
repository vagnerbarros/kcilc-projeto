<?php

class RepositorioFotoProduto extends RepositorioEntidade {

	public static $NM_REPOSITORIO = "RepositorioFotoProduto";

	public function RepositorioFotoProduto(){
		parent::__construct(FotoProduto::$NM_ENTITY);
	}
	
	public function selectById($id){
		$keys['id'] = $id;
		$result = $this->select($keys);
		return $result[0];
	}
	
	public function mount($resultSet){
		$objs = array();
		while ($item = $resultSet->fetch()) {
			array_push($objs, FotoProduto::fromArray($item));
		}
		return $objs;
	}
	
    public function selectByIdProduto($id_produto){
		$fotoProduto = Constants::$_BASE.".".Constants::$_NAMESPACE.FotoProduto::$NM_ENTITY." r";
		$query = "SELECT * FROM $fotoProduto WHERE status = '".Constants::$_ATIVO."' AND
		 	id_produto = :id_produto";
		$result = ConexaoBD::prepare($query);
		$result->bindValue(":id_produto", $id_produto);
		$result->execute();
		$this->reportErrors($result);
		return $this->mount($result);
	}
}

?>