<?php

class Usuario implements Entidade {
	
	//nome da entidade
	public static $NM_ENTITY = "usuario";
	
	private $id;
	private $perfil;
	private $nome;
	private $cpf;
	private $rg;
	private $cep;
	private $rua;
	private $numero;
	private $bairro;
	private $complemento;
	private $cidade;
	private $estado;
	private $telefone;
	private $celular;
	private $email;
	private $senha;
	private $status;
	
	//construtor
	public function Usuario($id, $perfil, $nome, $cpf, $rg, $cep, $rua, $numero, $bairro,
	 	$complemento, $cidade, $estado, $telefone, $celular,  $email, $senha, $status){
		
		$this->setId($id);
		$this->setPerfil($perfil);
		$this->setNome($nome);
		$this->setCpf($cpf);
		$this->setRg($rg);
		$this->setCep($cep);
		$this->setRua($rua);
		$this->setNumero($numero);
		$this->setBairro($bairro);
		$this->setComplemento($complemento);
		$this->setCidade($cidade);
		$this->setEstado($estado);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setEmail($email);
		$this->setSenha($senha);
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
		if(!($obj instanceof Usuario))
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
		$hash['perfil'] = $this->getPerfil();
		$hash['nome'] = $this->getNome();
		$hash['cpf'] = $this->getCpf();
		$hash['rg'] = $this->getRg();
		$hash['cep'] = $this->getCep();
		$hash['rua'] = $this->getRua();
		$hash['numero'] = $this->getNumero();
		$hash['bairro'] = $this->getBairro();
		$hash['complemento'] = $this->getComplemento();
		$hash['cidade'] = $this->getCidade();
		$hash['estado'] = $this->getEstado();
		$hash['telefone'] = $this->getTelefone();
		$hash['celular'] = $this->getCelular();
		$hash['email'] = $this->getEmail();
		$hash['senha'] = $this->getSenha();
		$hash['status'] = $this->getStatus();  
		
		return $hash;
	}
	
	/**
	 * Método que transforma uma hash em um objeto do tipo usuario
	 */
	public static function fromArray($hash){
		
		return new Usuario($hash['id'], $hash['perfil'], $hash['nome'], $hash['cpf'],
			 $hash['rg'], $hash['cep'], $hash['rua'], $hash['numero'], $hash['bairro'],
			 $hash['complemento'], $hash['cidade'], $hash['estado'], $hash['telefone'],
			 $hash['celular'], $hash['email'], $hash['senha'], $hash['status']);
	}
	
	//metodos get
	
	public function getId(){
		return $this->id;
	}
	public function getPerfil(){
		return $this->perfil;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function getRg(){
		return $this->rg;
	}
	public function getCep(){
		return $this->cep;
	}
	public function getRua(){
		return $this->rua;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function getComplemento(){
		return $this->complemento;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getEstado(){
		return $this->estado;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getCelular(){
		return $this->celular;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getStatus(){
		return $this->status;
	}
	
	//metodos set
	
	public function setId($id){
		$this->id = $id;
	}
	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function setRg($rg){
		$this->rg = $rg;
	}
	public function setCep($cep){
		$this->cep = $cep;
	}
	public function setRua($rua){
		$this->rua = $rua;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}
	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setCelular($celular){
		$this->celular = $celular;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function setStatus($status){
		$this->status = $status;
	}
}

?>