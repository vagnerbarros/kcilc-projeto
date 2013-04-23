<?php 

include 'view/Topo_content.php';

$id = $args->get('id');
$fachada = Fachada::getInstance();
$produto = $fachada->cadastroProduto()->buscarId($id);

?>
<div class="limite">
<form method='POST' action='<?php echo Proxy::action(AtualizarProdutoAction::$NM_ACTION)?>' target="_top">
	
	<input type="hidden" name="id" value="<?php echo $id;?>"/>
				
		<label class="control-label" for="<?php echo Proxy::encrypt('descricao')?>">Descrição*</label>
			<input id="<?php echo Proxy::encrypt('descricao');?>" value='<?php echo $produto->getDescricao();?>' name="<?php echo Proxy::encrypt('descricao');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('descricao');?>");'/>
		<br/>	
		<label class="control-label" for="<?php echo Proxy::encrypt('valor')?>">Valor*</label>
			<input id="<?php echo Proxy::encrypt('valor');?>" value='<?php echo $produto->getValor();?>' name="<?php echo Proxy::encrypt('valor');?>" type="text" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('valor');?>");'/>
		<br/>	
		<label class="control-label" for="<?php echo Proxy::encrypt('quantidade')?>">Quantidade*</label>
			<input id="<?php echo Proxy::encrypt('quantidade');?>" value='<?php echo $produto->getQuantidadeEstoque();?>' name="<?php echo Proxy::encrypt('quantidade');?>" type="text" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('quantidade');?>");'/>
		<br/>
		<label>Genero*</label>
		<?php $generos = Genero::generos();?>
			<select id="<?php echo Proxy::encrypt('genero');?>" name="<?php echo Proxy::encrypt('genero');?>">
				<?php
				foreach ($generos as $genero){ 
					if($genero == $produto->getGenero()){?>
						<option selected="selected" value="<?php echo $genero?>"><?php echo $genero?></option>
			<?php   }else {?>
						<option value="<?php echo $genero?>"><?php echo $genero?></option>
			<?php	}
				}?>
			</select>
		<br/>
		<label>Categoria*</label>
		<?php $categorias = Categoria::categorias();?>
			<select id="<?php echo Proxy::encrypt('categoria');?>" name="<?php echo Proxy::encrypt('categoria');?>">
				<?php
				foreach ($categorias as $categoria){ 
					if($categoria == $produto->getCategoria()){?>
						<option selected="selected" value="<?php echo $categoria?>"><?php echo $categoria?></option>
			<?php   }else{?>
						<option value="<?php echo $categoria?>"><?php echo $categoria?></option>
			<?php 	}
				}?>
			</select>
		<br/>
		<label>Foto*</label>
			<input class="<?php echo Proxy::encrypt('foto');?>" name="<?php echo Proxy::encrypt('foto');?>" type="file" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('foto');?>");'/>
	
	<button type="submit" class='btn btn-primary btn-large'><?php Messages::printStr(Messages::$PT_br, Messages::$STR_ENVIAR)?> &raquo;</button>
</form>
<?php 
	include 'view/rodape.php';
?>
</div>
