<?php
class Constants {

	//VERSION
	public static $_VERSION = "1.0 r1 2012-11-15 0830";
		
	//DEBUG
	public static $_DEBUG = true;
	
	//DOMAIN
	public static $_DOMAIN = "http://localhost/clickvest";
	
	//DATABASE PARAMETERS
	
		//DATABASE HOST
		public static $_HOST = "localhost"; //LOCAL
		//public static $_HOST = "dbmy0101.whservidor.com"; //deploy
		
		//DATABASE INFO
	//	public static $_USER = "sillabus_4";
	//	public static $_PASS = "sillabus4cafeh"; //sillabus4cafeh
	//	public static $_BASE = "sillabus_4"; 
	
		public static $_USER = "root";
		public static $_PASS = ""; 
		public static $_BASE = "santa_cruz";
	
		//ATIVO
		public static $_ATIVO = 'ATIVO';
		public static $_INATIVO = 'INATIVO';
		
		//Sim, Nao
		public static $_SIM = 'S';
		public static $_NAO = 'N';
		
		//NAMESPACES
		//public static $_NAMESPACE = "EEPE_TST_";//FREEMYSQL TESTE
		public static $_NAMESPACE = "";
		
		//BODY MESSAGE
		public static $_MSG_SUCESSO = 1;
		public static $_MSG_ERRO = 0;
	
	//CAMINHO JAVASCRIPT
	public static $_CAMINHO_JS = "template/javascript/";
	
	//CAMINHO IMAGENS CSS
	public static $_IMPORT_IMG = "template/css/img";
	
	//CAMINHO CSS
	public static $_CAMINHO_CSS = "template/css/";
	
	//CAMINHO IMAGENS PRODUTO
	public static $_FOTOS = "img/";
	
		
	//SYSTEM PROPERTIES (DO NOT CHANGE ON DEPLOY)
	public static $_DEFAULT_PAGE = "HomePage";
		
	public static $_SYSNAME = "ClickVest";
	public static $_SYSMAIL = "";
	public static $_SYSLABEL = "Click Vest";
	public static $_SITENAME = "Click Vest";
	
	//BODY MESSAGE
	public static $_MSG_SUCCESS = "alert-success";
	public static $_MSG_WARNING = "alert-error";
	public static $_MSG_ERROR = "alert-error";
	
	//Yes, No
	public static $_YES = 'Y';
	public static $_NO = 'N';

}
?>