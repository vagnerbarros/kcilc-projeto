
<?php 
	include 'view/Topo_content.php';
	$msg_carrinho = $args->get('msg_carrinho');
	$msg_cadastro = $args->get('msg_cadastro');
?>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
  $(function() {
    $( "#dialog" ).dialog();
  });
</script>

<div class="limite">


        <?php if($msg_carrinho!=null){ ?>
	        <div id="dialog" title="ClickVest">
                <p>Produto Adicionado ao Carrinho!</p>
            </div>
        <?php }?>

        <?php if($msg_cadastro!=null){ ?>
	        <div id="dialog" title="ClickVest">
                <p>Bem-Vindo ao ClickVest! Agora você já pode fazer suas reservas e usar todo nosso serviço.</p>
            </div>
        <?php }?>
        
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
			
			<p>Sua preocupação em sair de casa para alugar roupas acabou! 
			A ClickVest leva a roupa até você em apenas um clique!
            Confira os lançamentos e promoções, agende sua visita conosco e tenha segurança, 
            elegância e comodidade sem precisar sair de casa!
            <br/>
            <br/>
            ClickVest, seu look em um clique!
            <br/>
            <br/>
            <br/>
            <br/>
            </p>
			<p>Contate-nos hoje mesmo! 0800 3722 2170</p>
			
		</div>
		
		<div class="clr"></div>
		
		<div class="content wh92pc mrgL30 content_destaques">
			
			<h3>Lançamentos</h3>
			
			<ul class="lista_produtos" id="lista_produtos">
				
				<?php
					$fachada = Fachada::getInstance();
					$produtos = $fachada->cadastroProduto()->buscarProdutoPorSituacaoLimitada(SituacaoProduto::$_LANCAMENTO, 10); 
					foreach($produtos as $produto){
				?>
				
				<li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos[0]->getNomeArquivo();?>" width="150" height="185"/>
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
					$produtos = $fachada->cadastroProduto()->buscarProdutoPorSituacaoLimitada(SituacaoProduto::$_PROMOCAO, 5); 
					foreach($produtos as $produto){
				?>
				
				<li>
					<a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">  
					<?php $fotos = $produto->getFotos();?>
					<img alt="" src="<?php echo Constants::$_FOTOS.$fotos[0]->getNomeArquivo();?>" width="150" height="185"/>
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