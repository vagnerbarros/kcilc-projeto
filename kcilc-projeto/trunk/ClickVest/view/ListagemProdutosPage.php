<?php 
class ListagemProdutosPage extends Page {
	
	/**
	 * Constante que representa o ID desta p�gina 
	 * na se��o
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'ListagemProdutosPage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "ClickVest.net | In�cio";
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::permissions()
	 */
	public function permissions(){
		$this->addPermissao(ACL::all()); //Everybody
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::head()
	 */
	public function head($args, $lang){
		
		$this->importCss("style_topo.css");
		$this->importCss("style.css");
		$this->importCss("style_rodape.css");
		$this->importCss("style_index.css");
		$this->importCss("jPages.css");
		$this->importCss("style_carrinho.css");
		
		$this->importJs("jquery.min.js");
		$this->importJs("jquery.easing.1.3.js");
		$this->importJs("jPages.js");
		$this->importJs("script_topo.js");
		$this->importJs("script_slide.js");
		$this->importJs("superfish.js");
		$this->importJs("jquery.cycle.all.min.js");
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'ListagemProdutosPage_content.php';
	}
	
}
?>
