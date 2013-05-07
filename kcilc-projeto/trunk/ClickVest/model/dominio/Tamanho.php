<?php
class Tamanho {
	
	public static $_PP = "PP";
	public static $_P = "P";
	public static $_M = "M";
	public static $_G = "G";
	public static $_GG = "GG";
	
	public static function todos(){
		$tamanhos = array();
		array_push($tamanhos, Tamanho::$_PP);
		array_push($tamanhos, Tamanho::$_P);
		array_push($tamanhos, Tamanho::$_M);
		array_push($tamanhos, Tamanho::$_G);
		array_push($tamanhos, Tamanho::$_GG);
		return $tamanhos;
	}
}
?>