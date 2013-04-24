
<?php 
	include 'view/Topo_content.php';
?>

<div class="limite">

		<div id="slider">
			<!-- start slideshow -->
			<div id="slideshow">
				<div class="slider-item">
					<a href="#"><img src="template/images_slide/slide_01.png" alt="icon"
						width="500" height="241" border="0" /> </a>
				</div>
				<div class="slider-item">
					<a href="#"><img src="template/images_slide/slide_02.png" alt="icon"
						width="500" height="241" border="0" /> </a>
				</div>
				<div class="slider-item">
					<a href="#"><img src="template/images_slide/slide_03.png" alt="icon"
						width="500" height="241" border="0" /> </a>
				</div>
			</div>
			<!-- end #slideshow -->
			<div class="controls-center">
				<div id="slider_controls">
					<ul id="slider_nav">
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
			</div>
			<div class="clr"></div>
		</div>
		
		<div class="content wh403 mrgL15 content_welcome">
			<h3>Bem-Vindo ao ClickVest.net</h3>
			
			<p>O ClickVest é uma forma inteligente de You can create your shop
			with unlimited combinations, colors and with a lot of great features.
			This is the first of the 8 sliders available, and here you can put
			some widgets (i’m using a text widget to add this content! :)
			Unlimited colors, 200+ Cufon/Google fonts, 60 custom
			background...Maya is a theme designed by yourself. Is really fun to
			set up your e-commerce site with this wonderful theme.</p>

			<p>Contate-nos hoje mesmo! (81) 9999.9999</p>
			
		</div>
		
		<div class="clr"></div>
		
		<div class="content wh92pc mrgL30 content_destaques">
			
			<h3>Lançamentos</h3>
			
			<ul class="lista_produtos" id="lista_produtos">
				
				<?php
					$fachada = Fachada::getInstance();
					$produtos = $fachada->cadastroProduto()->listar(); 
					foreach($produtos as $produto){
				?>
				
				<li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos->getNomeArquivo();?>" width="140" height="115"/>
					<span class="descricao_prod"><?php echo $produto->getDescricao();?></span><br/>
					<span class="preco_prod">R$ <?php echo $produto->getValor();?></span>
					
					<p class="flag_add_cart"><img alt="" src="template/css/img/flag_add_cart.png" width="150"></p>
					
					</a>
				</li>
				
				<?php }?>
				
				
			</ul>
		
		</div>
		
		<div class="clr"></div>
		
			<div class="content wh92pc mrgL30 content_destaques">
			
			<h3>Promoções</h3>
			
			<ul class="lista_produtos" id="lista_produtos">
				
				<?php
					$fachada = Fachada::getInstance();
					$produtos = $fachada->cadastroProduto()->listar(); 
					foreach($produtos as $produto){
				?>
				
				<li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos->getNomeArquivo();?>" width="140" height="115"/>
					<span class="descricao_prod"><?php echo $produto->getDescricao();?></span><br/>
					<span class="preco_prod">R$ <?php echo $produto->getValor();?></span>
					
					<p class="flag_add_cart"><img alt="" src="template/css/img/flag_add_cart.png" width="150"></p>
					
					</a>
				</li>
				
				<?php }?>
				
				
			</ul>
		
		</div>
		<div class="clr"></div>
		<br/>
		
<?php 
	include 'view/rodape.php';
?>

</div>