<?php

class SituacaoProduto{

	public static $_NORMAL = "Normal";
    public static $_PROMOCAO = "Promo��o";
	public static $_LANCAMENTO = "Lan�amento";
	
	public static function situacoes(){
		$situacoes = array();
		array_push($situacoes, SituacaoProduto::$_NORMAL);
		array_push($situacoes, SituacaoProduto::$_LANCAMENTO);
		array_push($situacoes, SituacaoProduto::$_PROMOCAO);
		return $situacoes;
	}

}
?>