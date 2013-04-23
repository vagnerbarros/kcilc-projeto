<?php

class CadastroUsuario extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroUsuario";
	
	public function CadastroUsuario($fachada){
		parent::__construct(new RepositorioUsuario(), $fachada);
	}
	
	public function logar($email, $senha){
		$usuario = $this->repositorio->retrieveByEmailSenha($email, $senha);
		if($usuario == null)	
			throw new EmailSenhaIncorretaException();
		return $usuario;
	}
	
	public function cadastrarFuncionario($usuario){
		$this->cadastrar($usuario, ACL::$ACL_FUNCIONARIO);
	}
	
	public function cadastrarCliente($usuario){
		$this->cadastrar($usuario, ACL::$ACL_CLIENTE);
	}
	
	//funзгo de cadastro que cria um novo usuбrio com um perfil especнfico
	private function cadastrar($usuario, $tipo_perfil){
		$usuario->setPerfil($tipo_perfil);
		$this->repositorio->create($usuario);
	}
	
	public function inativar($id){
		$usuario = $this->buscarId($id);
		$usuario->setStatus(Constants::$_INATIVO);
		$this->repositorio->update($usuario);
	}
	
	public function atualizar($usuario){
		$this->repositorio->update($usuario);
	}
	
	public function listarClientes(){
		return $this->listar(ACL::$ACL_CLIENTE);
	}
	
	public function listarFuncionarios(){
		return $this->listar(ACL::$ACL_FUNCIONARIO);
	}
	
	public function listarClientesComReservas(){
		return $this->repositorio->selectByReservaAtiva();
	}
	
	public function buscarId($id){
		return $this->repositorio->selectById($id);
	}

	//privates	
	private function listar($tipo_perfil){
		return $this->repositorio->selectByPerfil($tipo_perfil);
	}
}

?>