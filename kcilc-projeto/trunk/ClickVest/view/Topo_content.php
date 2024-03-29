<div class="limite">

	<div class="bg_topo">
		<div class="left_topo"></div>
	
		<div class="right_topo"></div>
		
		<?php if(SessionManager::hasUser()){?>
		<a class="carrinho" href="<?php echo Proxy::page(CarrinhoPage::$NM_PAGINA);?>">
			<?php 
			$fachada = Fachada::getInstance();
			$usuario = SessionManager::getUser();
			$produtosReservados = $fachada->cadastroProdutoReservado()->buscarPorIdClienteReserva($usuario->getId());
			$quantidade = 0;
			foreach ($produtosReservados as $pr){
				$quantidade += $pr->getQuantidade();
			}
			?>
			 <span><?php echo $quantidade?> Itens</span>
		<?php }?>
		</a>
		
		<div class="div_links_logout">
		<?php
		$usuario = SessionManager::getUser();
		if(!$usuario){ ?>
			<div class="content_form_login">
			<?php 
			include 'view/form/LoginForm.php';
			?>
			</div>
			<?php 
		}
		else{ ?>
			<a href="<?php echo Proxy::action(LogoutAction::$NM_ACTION);?>">Sair</a>
				<?php	}

				?>
		</div>

		<div class="clr"></div>

	</div>

</div>

<div class="limite">

	<div class="bg_logo">

		<div class="logotipo">
			<img alt="" src="template/css/img/logo.png" />
		</div>

		<form action="<?php echo Proxy::page(ListagemProdutosPage::$NM_PAGINA);?>" method="post" class="form_busca" id="form_busca" name="form_busca">
			<input type="text" id="txt_busca" name="<?php echo Proxy::encrypt('descricao');?>" /><a
				onclick="javascript:submeter();"> <img alt=""
				src="template/css/img/search.png" />
			</a>
		</form>

	</div>

	<div class="bg_menu">
		<ul class="menu" id="menu">

			<li><a href="index.php">In�cio</a></li>

			<li>|</li>
			
			<?php if(SessionManager::hasUser()){
				$usuario = SessionManager::getUser();
				if($usuario->getPerfil() == ACL::$ACL_FUNCIONARIO){ ?>
					<li><a href="">Administra��o <img alt="" src="template/css/img/seta_down.png" height="6" /></a>
						<ul class="sub_menu">
						<li><a href="<?php echo Proxy::page(CadastrarProdutoPage::$NM_PAGINA);?>">Cadastro Produto</a></li>
						<li><a href="<?php echo Proxy::page(ManterProdutoPage::$NM_PAGINA);?>">Manter Produto</a></li>
						<li><a href="<?php echo Proxy::page(ManterReservaPage::$NM_PAGINA);?>">Manter Reserva</a></li>
						<li><a href="<?php echo Proxy::page(ManterClientePage::$NM_PAGINA);?>">Manter Cliente</a></li>
				</ul>
			</li>
			<li>|</li>
					<?php }?>
		<?php 	} ?>
		
		<?php
			$generos = Genero::generos();		
		 	foreach ($generos as $genero){
		 ?>
			
			<li><a href=""><?php echo $genero?> <img alt=""
					src="template/css/img/seta_down.png" height="6" />
			</a>
				<ul class="sub_menu">
					<?php $categorias = Categoria::categorias($genero);?>
					<?php
					foreach ($categorias as $categoria){ ?>
						<li><a href="<?php echo Proxy::page(ListagemProdutosPage::$NM_PAGINA, array(Proxy::encrypt('categoria')=>$categoria, Proxy::encrypt('genero')=>$genero));?>"> &rsaquo; <?php echo $categoria?></a> </li>
					<?php }?>
				</ul>
			</li>

			<li>|</li>
			
		<?php }?>
		    <li>
		        <a href="">ClickVest <img alt="" src="template/css/img/seta_down.png" height="6" /></a>
		        <ul class="sub_menu">
						<li><a href="<?php echo Proxy::page(ClickVestPage::$NM_PAGINA);?>">Quem Somos</a></li>
						<li><a href="<?php echo Proxy::page(ServicoPage::$NM_PAGINA);?>">Servi�o</a></li>
						<li><a href="<?php echo Proxy::page(RaioAtuacaoPage::$NM_PAGINA);?>">Raio de Atua��o</a></li>
						<li><a href="<?php echo Proxy::page(PoliticasAtendimentoPage::$NM_PAGINA);?>">Pol�ticas de Atendimento</a></li>
				</ul>
		    </li>
			<li>|</li>
			
			<?php if(!$usuario){ ?>
				<li><a href="<?php echo Proxy::page(CadastroUsuarioPage::$NM_PAGINA);?>">Cadastre-se</a></li>
			<?php }else{?>
				<li>
				    <a href="">Meu Cadastro <img alt="" src="template/css/img/seta_down.png" height="6" /></a>
				    <ul class="sub_menu">
						<li><a href="<?php echo Proxy::page(AtualizarPerfilPage::$NM_PAGINA);?>">Dados Cadastrais</a></li>
						<li><a href="<?php echo Proxy::page(CarrinhoPage::$NM_PAGINA);?>">Meu Carrinho</a></li>
						<li><a href="<?php echo Proxy::page(HistoricoReservaPage::$NM_PAGINA);?>">Hist�rico de Reservas</a></li>
				</ul>
				</li>
				<li>|</li>
				<li><a href="<?php echo Proxy::page(ChatPage::$NM_PAGINA);?>">Contato com Atendente</a></li>
			<?php }?>
			
		</ul>

		<div class="clr"></div>
	</div>
</div>
