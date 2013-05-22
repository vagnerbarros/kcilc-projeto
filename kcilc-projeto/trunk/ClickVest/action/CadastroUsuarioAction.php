<?php require_once "lib/securimage/securimage.php"?>
<?php 
class CadastroUsuarioAction extends Action {
	
	public static $NM_ACTION = 'CadastroUsuarioAction';
	
	public function label(){
		$html = "";
		$html .="<div class='progress progress-striped active'>";
		$html .="<div class='bar' style='width: 40%;'></div>";
		$html .="</div>";
		$html .="";
		return $html;
	}
	
	public function permissions(){
		$this->allow(ACL::$ACL_FUNCIONARIO);
		$this->allow(ACL::$ACL_ADMIN);
		$this->allow(ACL::$ACL_USUARIO);
	}

	public function run($form){ 

		//TODO
		$img = new Securimage();
		
		try{
			
			$code = $form->get('code');
			if(!$img->check($code))
				throw new CaptchaIncorretoException();
				
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
			$email = $form->get('email');
			$senha = $form->get('senha');	
			
			//cria o objeto
			$usuario = new Usuario(null, null, $nome, $cpf, $rg, $cep, $rua, $numero,
			 	$bairro, $complemento, $cidade, $estado, $telefone, $celular, $email,
			 	$senha, Constants::$_ATIVO);
			 	
			//persiste objeto 	
			$fachada = Fachada::getInstance();
			$fachada->cadastroUsuario()->cadastrarCliente($usuario);
			
			SessionManager::setUser($usuario);
			
			//mensagem de sucesso
			$this->setMessage("Usuário cadastrado com sucesso.", Constants::$_MSG_SUCCESS);
			$this->load('100%');		
			$this->setForward(Forward::go(HomePage::$NM_PAGINA.'&msg_cadastro=ok'));
		}
		catch(CaptchaIncorretoException $e){
			$this->setMessage("As letras não foram digitadas corretamente! Por favor, tente novamente...", Constants::$_MSG_ERROR);
			$this->load('100%');		
			$this->setForward(Forward::$_BACK);
		}
	}
}
?>