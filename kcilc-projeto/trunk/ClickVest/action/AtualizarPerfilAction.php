<?php 
class AtualizarPerfilAction extends Action {
	
	public static $NM_ACTION = 'AtualizarPerfilAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::allButOne(ACL::$ACL_USUARIO));
	}

	public function run($form){ 

		//pega valores do form preenchido
		$nome = $form->get('nome');
		$cpf = $form->get('cpf');
		$rg = $form->get('rg');
		$cep = $form->get('cep');
		$rua = $form->get('rua');
		$numero = $form->get('numero');
		$bairro = $form->get('bairro');
		$complemento = $form->get('complemento');
		$cidade = $form->get('cidade');
		$estado = $form->get('estado');
		$telefone = $form->get('telefone');
		$celular = $form->get('celular');
		$senha = $form->get('senha');	
		
		//atualiza o usuario da sessão
		$usuario = SessionManager::getUser();
		$usuario->setNome($nome);
		$usuario->setCpf($cpf);
		$usuario->setRg($rg);
		$usuario->setCep($cep);
		$usuario->setRua($rua);
		$usuario->setNumero($numero);
		$usuario->setBairro($bairro);
		$usuario->setComplemento($complemento);
		$usuario->setCidade($cidade);
		$usuario->setEstado($estado);
		$usuario->setTelefone($telefone);
		$usuario->setCelular($celular);
		$usuario->setSenha($senha);	
		
		//persiste o usuario atualizado
		$fachada = Fachada::getInstance();
		$fachada->cadastroUsuario()->atualizar($usuario);
		
		//limpa sessão e adiciona o usuario atualizado
		SessionManager::cleanUser();
		SessionManager::setUser($usuario);
			
		//mensagem de sucesso
		$this->setMessage("Perfil atualizado com sucesso.", Constants::$_MSG_SUCCESS);
		$this->load('100%');		
		$this->setForward(Forward::go(HomePage::$NM_PAGINA));
	}
}
?>