<?php
 //EXCEPTIONS
require_once("model/exception/CadastroException.php");
require_once("model/exception/CaptchaIncorretoException.php");
require_once("model/exception/EmailSenhaIncorretaException.php");
  
 //ENTIDADES
require_once("model/entidades/Usuario.php");
require_once("model/entidades/Reserva.php");
require_once("model/entidades/ProdutoReservado.php");
require_once("model/entidades/Produto.php");
require_once("model/entidades/FotoProduto.php");

 //REPOSITORIOS
require_once("model/repositorio/IRepositorio.php");
require_once("model/repositorio/RepositorioEntidade.php");
require_once("model/repositorio/RepositorioProduto.php");
require_once("model/repositorio/RepositorioProdutoReservado.php");
require_once("model/repositorio/RepositorioReserva.php");
require_once("model/repositorio/RepositorioUsuario.php");
require_once("model/repositorio/RepositorioFotoProduto.php");
 
 //CADASTROS
require_once("model/cadastro/CadastroEntidade.php");
require_once("model/cadastro/CadastroProduto.php");
require_once("model/cadastro/CadastroProdutoReservado.php");
require_once("model/cadastro/CadastroReserva.php");
require_once("model/cadastro/CadastroUsuario.php");
require_once("model/cadastro/CadastroFotoProduto.php");
 
//DOMINIOS
require_once("model/dominio/Genero.php");
require_once("model/dominio/Categoria.php");
require_once("model/dominio/Situacao.php");
require_once("model/dominio/Tamanho.php");
require_once("model/dominio/Cor.php");

class Fachada {

	private static $instance;
	private $cadastros;
	
	private function __construct(){
		$this->cadastros = array();
		$this->cadastros[Usuario::$NM_ENTITY] = new CadastroUsuario($this);
		$this->cadastros[Reserva::$NM_ENTITY] = new CadastroReserva($this);
		$this->cadastros[Produto::$NM_ENTITY] = new CadastroProduto($this);
		$this->cadastros[ProdutoReservado::$NM_ENTITY] = new CadastroProdutoReservado($this);
		$this->cadastros[FotoProduto::$NM_ENTITY] = new CadastroFotoProduto($this);
	}
	
	public function getInstance(){
		if(Fachada::$instance == null) {
			Fachada::$instance = new Fachada ();
		}
		return Fachada::$instance;
	}
	
	//Usuario
	public function cadastroUsuario(){
		return $this->cadastros[Usuario::$NM_ENTITY];
	}
	
	//Reserva
	public function cadastroReserva(){
		return $this->cadastros[Reserva::$NM_ENTITY];
	}
	
	//Produto
	public function cadastroProduto(){
		return $this->cadastros[Produto::$NM_ENTITY];
	}
	
	//ProdutoReservado
	public function cadastroProdutoReservado(){
		return $this->cadastros[ProdutoReservado::$NM_ENTITY];
	}
	
    //FotoProduto
	public function cadastroFotoProduto(){
		return $this->cadastros[FotoProduto::$NM_ENTITY];
	}
}

?>