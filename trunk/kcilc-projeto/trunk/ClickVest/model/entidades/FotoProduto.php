<?php

class FotoProduto implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "foto_produto";
	
	private $id;
	private $nome_arquivo;
	private $id_produto;
	private $status;

	//construtor
	public function FotoProduto($id, $nome_arquivo, $id_produto, $status){
		
		$this->setId($id);
		$this->setNomeArquivo($nome_arquivo);
		$this->setIdProduto($id_produto);
		$this->setStatus($status);
	}
	
	/**
	 * 
	 * Método que transforma a entidade em um String
	 */
	public function __toString(){
		return "";
	}
	
	/**
	 * 
	 * Método que compara a entidade a outra entidade do mesmo tipo
	 * @param User $obj
	 * @throws ComparacaoTipoInvalidoException
	 */
	public function compareTo($obj){
		if(!($obj instanceof FotoProduto))
				throw new InvalidTypeException();
		
		return ($this->getId() == $obj->getId());
	}
	
	/**
	 * 
	 * Método que transforma o objeto em uma Hash 
	 */
	public function toArray(){
		
		$hash = array();
		
		$hash['id'] = $this->getId();
		$hash['nome_arquivo'] = $this->getNomeArquivo();
		$hash['id_produto'] = $this->getIdProduto();
		$hash['status'] = $this->getStatus();
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		
		return new FotoProduto($hash['id'], $hash['nome_arquivo'], $hash['id_produto'], $hash['status']);
	}
	
	//metodos get
	
	public function getId(){
		return $this->id;
	}
	public function getNomeArquivo(){
		return $this->nome_arquivo;
	}
    public function getIdProduto(){
		return $this->id_produto;
	}
	public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	public function setId($id){
		$this->id = $id;
	}
	public function setNomeArquivo($nome_arquivo){
		$this->nome_arquivo = $nome_arquivo;
	}
    public function setIdProduto($id_produto){
		$this->id_produto = $id_produto;
	}
	public function setStatus($status){
		$this->status = $status;
	}
}

?>