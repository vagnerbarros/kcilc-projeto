<?php
class Cor {
	
	public static $_BRANCO = "Branco";
	public static $_PRETO = "Preto";
	public static $_AMARELO = "Amarelo";
	public static $_VERMELHO = "Vermelho";
	public static $_AZUL = "Azul";
	public static $_VERDE = "Verde";
    public static $_ROSA = "Rosa";
    public static $_LILAS = "Lilás";
    public static $_LILAS_VINHO = "Lilás e Vinho";
    public static $_VINHO = "Vinho";
    public static $_DOURADO = "Dourado";
	public static $_OUTRA = "Outra";
	
	public static function todas(){
		$cores = array();
		array_push($cores, Cor::$_BRANCO);
		array_push($cores, Cor::$_PRETO);
		array_push($cores, Cor::$_AMARELO);
		array_push($cores, Cor::$_VERMELHO);
		array_push($cores, Cor::$_AZUL);
		array_push($cores, Cor::$_VERDE);
		array_push($cores, Cor::$_ROSA);
		array_push($cores, Cor::$_LILAS);
		array_push($cores, Cor::$_LILAS_VINHO);
		array_push($cores, Cor::$_DOURADO);
		array_push($cores, Cor::$_VINHO);
		array_push($cores, Cor::$_OUTRA);
		return $cores;
	}
}
?>