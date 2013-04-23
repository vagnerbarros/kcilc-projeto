<?php
class Genero {
	
	public static $_MASCULINO = "Masculino";
	public static $_FEMININO = "Feminino";
	
	public static function generos(){
		$generos = array();
		array_push($generos, Genero::$_FEMININO);
		array_push($generos, Genero::$_MASCULINO);
		return $generos;
	}
}
?>