<?php 
class ChatPage extends Page {
	
	/**
	 * Constante que representa o ID desta página 
	 * na seção
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'ChatPage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "Contato com Atendente";
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::permissions()
	 */
	public function permissions(){
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::head()
	 */
	public function head($args, $lang){
		
		//Imports para o Topo
		$this->importCss("style_topo.css");
		$this->importJs("jquery.min.js");
		$this->importJs("jquery.easing.1.3.js");
		$this->importJs("script_topo.js");
		//Import para o Rodapé
		$this->importCss("style_rodape.css");
		//Import Geral
		$this->importCss("style.css");
		$this->importCss("style_form.css");
		//ImportsParaPage
		$this->importCss("style_carrinho.css");
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'ChatPage_content.php';
	}
	
}
?>
