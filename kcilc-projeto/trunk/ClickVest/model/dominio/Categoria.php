<?php
class Categoria {
	
	public static $_BIJUTERIA = "Bijuteria";
	public static $_BOLSA = "Bolsa";
	public static $_VESTIDO_CURTO = "Vestido Curto";
	public static $_VESTIDO_LONGO = "Vestido Longo";
	public static $_SANDALIA = "Sandália";
	public static $_SAPATO = "Sapato";
	public static $_CINTO = "Cinto";
	public static $_SMOKING = "Smoking";
	public static $_TERNO = "Terno";
	
	public static function categorias($genero){
		$categorias = array();
		
		if($genero == Genero::$_MASCULINO){
			array_push($categorias, Categoria::$_SAPATO);
			array_push($categorias, Categoria::$_CINTO);
			array_push($categorias, Categoria::$_SMOKING);
			array_push($categorias, Categoria::$_TERNO);
		}
		else if($genero == Genero::$_FEMININO){
			array_push($categorias, Categoria::$_BIJUTERIA);
			array_push($categorias, Categoria::$_BOLSA);
			array_push($categorias, Categoria::$_VESTIDO_CURTO);
			array_push($categorias, Categoria::$_VESTIDO_LONGO);
			array_push($categorias, Categoria::$_SANDALIA);
		}
		return $categorias;
	}
	
	public static function todasCategorias(){
		$categorias = array();
		
		array_push($categorias, Categoria::$_SAPATO);
		array_push($categorias, Categoria::$_CINTO);
		array_push($categorias, Categoria::$_SMOKING);
		array_push($categorias, Categoria::$_TERNO);
		array_push($categorias, Categoria::$_BIJUTERIA);
		array_push($categorias, Categoria::$_BOLSA);
		array_push($categorias, Categoria::$_VESTIDO_CURTO);
		array_push($categorias, Categoria::$_VESTIDO_LONGO);
		array_push($categorias, Categoria::$_SANDALIA);
		return $categorias;
	}
}
?>