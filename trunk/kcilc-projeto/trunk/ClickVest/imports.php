<?php
require_once("util/Constants.php");
require_once("util/Messages.php");
require_once("util/SessionManager.php");
require_once("util/ACL.php");
require_once("util/Page.php");
require_once("util/Form.php");
require_once("util/Entidade.php");
require_once("util/Action.php");
require_once("util/Forward.php");
require_once("util/Imports.php");
require_once("util/ConexaoBD.php");
require_once('util/Proxy.php');

Proxy::reset();

//DOMINIOS
//include 'model/dominio/TipoPerfil.php';

//MODEL
require_once("model/fachada/Fachada.php");


//Registra as Pages
Imports::page("AtualizarPerfilPage");
Imports::page("AtualizarUsuarioPage");
Imports::page("AtualizarProdutoPage");

Imports::page("CadastrarProdutoPage");
Imports::page("CadastroUsuarioPage");
	
Imports::page("CarrinhoPage");
Imports::page("ChatPage");
Imports::page("HomePage");

Imports::page("ManterClientePage");
Imports::page("ManterProdutoPage");
Imports::page("ManterReservaPage");

Imports::page("ReservarProdutoPage");
Imports::page("DetalharReservaPage");
Imports::page("ListarReservaPage");

Imports::page("ProdutoPage");

Imports::page("ListagemProdutosPage");

//Registra as Actions
Imports::action("CadastroUsuarioAction");
Imports::action("CadastrarProdutoAction");

Imports::action("LoginAction");
Imports::action("LogoutAction");
Imports::action("ChatAction");

Imports::action("RemoverClienteAction");
Imports::action("RemoverProdutoAction");

Imports::action("ReservarProdutoAction");
Imports::action("FecharReservasAction");
Imports::action("RemoverProdutoCarrinhoAction");

Imports::action("AtualizarPerfilAction");
Imports::action("AtualizarUsuarioAction");
Imports::action("AtualizarProdutoAction");

?>
