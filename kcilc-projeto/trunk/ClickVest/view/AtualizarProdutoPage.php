<?php 
class AtualizarProdutoPage extends Page {
	
	/**
	 * Constante que representa o ID desta página 
	 * na seção
	 * @var String NM_PAGINA
	 */
	public static $NM_PAGINA = 'AtualizarProdutoPage';
	
	/**
	 * (non-PHPdoc)
	 * @see Page::title()
	 */
	public function title($lang){
		return "Atualizar";
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::permissions()
	 */
	public function permissions(){
		$this->addPermissao(ACL::$ACL_ADMIN);
		$this->addPermissao(ACL::$ACL_FUNCIONARIO);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::head()
	 */
	public function head($args, $lang){
		
		$this->importCss("style_topo.css");
		
		$this->importJs("jquery.min.js");
		$this->importJs("jquery.easing.1.3.js");
		$this->importJs("script_topo.js");
		
		$this->importCss("style.css");
		$this->importCss("style_rodape.css");
		
		$this->importJs("script_slide.js");
		$this->importJs("superfish.js");
		$this->importJs("jquery.cycle.all.min.js");
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Page::content()
	 */
	public function content($args, $lang){ 
		include 'AtualizarProdutoPage_content.php';
	}
	
}
?>
