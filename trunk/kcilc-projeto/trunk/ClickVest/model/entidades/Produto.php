<?php

class Produto implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "produto";
	
	private $id;
	private $quantidade_estoque;
	private $descricao;
	private $valor;
	private $categoria;
	private $genero;
	private $tamanho;
	private $cor;
	private $status;
	
	//fotos do produto
	private $fotos;
	
	//construtor
	public function Produto($id, $quantidade_estoque, $descricao, $valor, $categoria, $genero, $tamanho, $cor, $status){
		
		$this->setId($id);
		$this->setQuantidadeEstoque($quantidade_estoque);
		$this->setDescricao($descricao);
		$this->setValor($valor);
		$this->setGenero($genero);
		$this->setTamanho($tamanho);
		$this->setCor($cor);
		$this->setCategoria($categoria);
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
		if(!($obj instanceof Produto))
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
		$hash['quantidade_estoque'] = $this->getQuantidadeEstoque();
		$hash['descricao'] = $this->getDescricao();
		$hash['valor'] = $this->getValor();
		$hash['genero'] = $this->getGenero();
		$hash['tamanho'] = $this->getTamanho();
		$hash['cor'] = $this->getCor();
		$hash['categoria'] = $this->getCategoria();
		$hash['status'] = $this->getStatus();  
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		
		return new Produto($hash['id'], $hash['quantidade_estoque'], $hash['descricao'], $hash['valor'], $hash['categoria'], $hash['genero'], $hash['tamanho'], $hash['cor'], $hash['status']);
	}
	
	//metodos get
	
	public function getId(){
		return $this->id;
	}
	public function getQuantidadeEstoque(){
		return $this->quantidade_estoque;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getValor(){
		return $this->valor;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function getGenero(){
		return $this->genero;
	}
	public function getTamanho(){
		return $this->tamanho;
	}
	public function getCor(){
		return $this->cor;
	}
	public function getFotos(){
		return $this->fotos;
	}
	public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	public function setId($id){
		$this->id = $id;
	}
	public function setQuantidadeEstoque($quantidade_estoque){
		$this->quantidade_estoque = $quantidade_estoque;
	}
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function setValor($valor){
		$this->valor = $valor;
	}
	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}
	public function setGenero($genero){
		$this->genero = $genero;
	}
	public function setTamanho($tamanho){
		$this->tamanho = $tamanho;
	}
	public function setCor($cor){
		$this->cor = $cor;
	}
	public function setFotos($fotos){
		$this->fotos = $fotos;
	}
	public function setStatus($status){
		$this->status = $status;
	}
}

?>