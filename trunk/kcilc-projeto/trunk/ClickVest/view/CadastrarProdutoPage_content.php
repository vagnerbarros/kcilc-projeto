<?php 

include 'view/Topo_content.php';

?>

<div class="limite">

<form method='POST' enctype="multipart/form-data" action='<?php echo Proxy::action(CadastrarProdutoAction::$NM_ACTION)?>' target="_top">
	
		<label>Descrição*</label>
			<input id="<?php echo Proxy::encrypt('descricao');?>" name="<?php echo Proxy::encrypt('descricao');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('descricao');?>");'/>
		<br/>
		<label>Valor*</label>
			<input id="<?php echo Proxy::encrypt('valor');?>" name="<?php echo Proxy::encrypt('valor');?>" type="text" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('valor');?>");'/>
		<br/>	
		<label>Quantidade*</label>
			<input id="<?php echo Proxy::encrypt('quantidade');?>" name="<?php echo Proxy::encrypt('quantidade');?>" type="text" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('quantidade');?>");'/>
		<br/>
		<label>Genero*</label>
		<?php $generos = Genero::generos();?>
			<select id="<?php echo Proxy::encrypt('genero');?>" name="<?php echo Proxy::encrypt('genero');?>">
				<?php
				foreach ($generos as $genero){ ?>
				<option value="<?php echo $genero?>"><?php echo $genero?></option>
				<?php }?>
			</select>
		<br/>
		<label>Categoria*</label>
		<?php $categorias = Categoria::todasCategorias();?>
			<select id="<?php echo Proxy::encrypt('categoria');?>" name="<?php echo Proxy::encrypt('categoria');?>">
				<?php
				foreach ($categorias as $categoria){ ?>
				<option value="<?php echo $categoria?>"><?php echo $categoria?></option>
				<?php }?>
			</select>
		<br/>
		<label>Foto*</label>
			<input class="<?php echo Proxy::encrypt('multi');?>" name="<?php echo Proxy::encrypt('pic[]');?>" type="file" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('foto');?>");'/>
		</div>
	
	<input type="submit" >
</form>
<?php 
	include 'view/rodape.php';
?>
</div>

