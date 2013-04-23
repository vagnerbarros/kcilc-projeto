<?php

class CadastroFotoProduto extends CadastroEntidade {

	private $NM_CADASTRO = "CadastroFotoProduto";
	
	public function CadastroFotoProduto($fachada){
		parent::__construct(new RepositorioFotoProduto(), $fachada);
	}
	
	public function cadastrar($fotoProduto){
		$this->repositorio->create($fotoProduto);
	}
	
    public function cadastrarFotos($arquivos, $idProduto){
    	
        $uploaddir = Constants::$_FOTOS;
        foreach ($arquivos["error"] as $key => $error){
            if ($error == UPLOAD_ERR_OK){
            
            	$tmp_name = $arquivos["tmp_name"][$key];
                $name = $arquivos["name"][$key];
                $uploadfile = $uploaddir . basename($name);
 
                if (move_uploaded_file($tmp_name, $uploadfile)){
                	if(strpos($arquivos['type'][$key], 'jpeg') || strpos($arquivos['type'][$key], 'png')){
                		$fotoProduto = new FotoProduto(null, $name, $idProduto, Constants::$_ATIVO);
                        $this->repositorio->create($fotoProduto);
                	}
                }
            }
        }
    	
	}
	
	public function inativar($id){
		$fotoProduto = $this->buscarId($id);
		$fotoProduto->setStatus(Constants::$_INATIVO);
		$this->repositorio->update($fotoProduto);
	}
	
	public function atualizar($fotoProduto){
		$this->repositorio->update($fotoProduto);
	}
	
	public function listar(){
		return $this->repositorio->selectAll();
	}
	
	public function buscarId($id){
		return $this->repositorio->selectById($id);
	}
	
	public function buscarPorProduto($id_produto){
		return $this->repositorio->selectByIdProduto($id_produto);
	}
}

?>