<?php
class Categoria {
	
	public static $_FORMAL = "Formal";
	public static $_ESPORTIVO = "Esportivo";
	public static $_CASUAL = "Casual";
	
	public static function categorias(){
		$categorias = array();
		array_push($categorias, Categoria::$_CASUAL);
		array_push($categorias, Categoria::$_ESPORTIVO);
		array_push($categorias, Categoria::$_FORMAL);
		return $categorias;
	}
}
?>