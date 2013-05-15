<?php 

include 'view/Topo_content.php';

?>

<div class="limite">
<div style="position: relative; left: 40px;">

<form method='POST' enctype="multipart/form-data" action='<?php echo Proxy::action(CadastrarProdutoAction::$NM_ACTION)?>' target="_top">
	
		<label>Descrição*</label>
			<br/><input  id="<?php echo Proxy::encrypt('descricao');?>" name="<?php echo Proxy::encrypt('descricao');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('descricao');?>");'/>
		<br/>
		<label>Valor*</label>
		<br/><input id="<?php echo Proxy::encrypt('valor');?>" name="<?php echo Proxy::encrypt('valor');?>" type="text" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('valor');?>");'/>
		<br/>	
		<label>Quantidade*</label>
		<br/><input id="<?php echo Proxy::encrypt('quantidade');?>" name="<?php echo Proxy::encrypt('quantidade');?>" type="text" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('quantidade');?>");'/>
		<br/>
		<label>Genero*</label>
		<?php $generos = Genero::generos();?>
			<br/><select id="<?php echo Proxy::encrypt('genero');?>" name="<?php echo Proxy::encrypt('genero');?>">
				<?php
				foreach ($generos as $genero){ ?>
				<option value="<?php echo $genero?>"><?php echo $genero?></option>
				<?php }?>
			</select>
		<br/>
		<label>Categoria*</label>
		<?php $categorias = Categoria::todasCategorias();?>
			<br/><select id="<?php echo Proxy::encrypt('categoria');?>" name="<?php echo Proxy::encrypt('categoria');?>">
				<?php
				foreach ($categorias as $categoria){ ?>
				<option value="<?php echo $categoria?>"><?php echo $categoria?></option>
				<?php }?>
			</select>
		<br/>
		<label>Tamanho*</label>
		<?php $tamanhos = Tamanho::todos();?>
			<br/><select id="<?php echo Proxy::encrypt('tamanho');?>" name="<?php echo Proxy::encrypt('tamanho');?>">
				<?php
				foreach ($tamanhos as $tamanho){ ?>
				<option value="<?php echo $tamanho?>"><?php echo $tamanho?></option>
				<?php }?>
			</select>
		<br/>
		<label>Cor*</label>
		<?php $cores = Cor::todas();?>
			<br/><select id="<?php echo Proxy::encrypt('cor');?>" name="<?php echo Proxy::encrypt('cor');?>">
				<?php
				foreach ($cores as $cor){ ?>
				<option value="<?php echo $cor?>"><?php echo $cor?></option>
				<?php }?>
			</select>
		<br/>
		<label>Situacao*</label>
		<?php $situacoes = SituacaoProduto::situacoes();?>
			<br/><select id="<?php echo Proxy::encrypt('situacao');?>" name="<?php echo Proxy::encrypt('situacao');?>">
				<?php
				foreach ($situacoes as $situacao){ ?>
				<option value="<?php echo $situacao?>"><?php echo $situacao?></option>
				<?php }?>
			</select>
		<br/>
		
		<label>Foto*</label>
			<br/><input class="multi" name="pic[]" type="file" />
	    <br/>
	    <input type="submit" value="Cadastrar" />
	    <br/>
	    <br/>
	<div class="clr"></div>
</form>
</div>
<?php 
	include 'view/rodape.php';
?>
</div>

