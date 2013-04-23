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
			<img alt="" src="template/css/img/logo.png" width="175" />
		</div>

		<form action="teste" class="form_busca" id="form_busca"
			name="form_busca">

			<input type="text" id="txt_busca" /> <a
				onclick="javascript:submeter();"> <img alt=""
				src="template/css/img/search.png" />
			</a>

		</form>

	</div>

	<div class="bg_menu">
		<ul class="menu" id="menu">

			<li><a href="index.php">Início</a></li>

			<li>|</li>
			
			<?php if(SessionManager::hasUser()){
				$usuario = SessionManager::getUser();
				if($usuario->getPerfil() == ACL::$ACL_FUNCIONARIO){ ?>
					<li><a href="">Administração <img alt="" src="template/css/img/seta_down.png" height="6" /></a>
						<ul class="sub_menu">
						<li><a href="<?php echo Proxy::page(ListagemProdutosPage::$NM_PAGINA);?>">Listagem de Produtos</a></li>
						<li><a href="<?php echo Proxy::page(ProdutoPage::$NM_PAGINA);?>">Visualizar Produto</a></li>
						<li><a href="<?php echo Proxy::page(CadastrarProdutoPage::$NM_PAGINA);?>">Cadastro Produto</a></li>
						<li><a href="<?php echo Proxy::page(ManterProdutoPage::$NM_PAGINA);?>">Manter Produto</a></li>
						<li><a href="<?php echo Proxy::page(ManterReservaPage::$NM_PAGINA);?>">Manter Reserva</a></li>
						<li><a href="<?php echo Proxy::page(ManterClientePage::$NM_PAGINA);?>">Manter Cliente</a></li>
					<?php }?>
				</ul>
			</li>
		<?php 	} ?>
			<li><a href="">Roupas Masculinas <img alt=""
					src="template/css/img/seta_down.png" height="6" />
			</a>
				<ul class="sub_menu">
					<?php $categorias = Categoria::categorias();?>
					<?php
					foreach ($categorias as $categoria){ ?>
						<li><a href=""> &rsaquo; <?php echo $categoria?></a> </li>
					<?php }?>
				</ul>
			</li>

			<li>|</li>

			<li><a href="">Roupas Femininas <img alt=""
					src="template/css/img/seta_down.png" height="6" />
			</a>
				<ul class="sub_menu">
					<?php $categorias = Categoria::categorias();?>
					<?php
					foreach ($categorias as $categoria){ ?>
						<li><a href=""> &rsaquo; <?php echo $categoria?></a> </li>
					<?php }?>
				</ul>
			</li>

			<li>|</li>
			
			<?php if(!$usuario){ ?>
				<li><a href="<?php echo Proxy::page(CadastroUsuarioPage::$NM_PAGINA);?>">Cadastre-se</a></li>
			<?php }else{?>
				<li><a href="<?php echo Proxy::page(AtualizarPerfilPage::$NM_PAGINA);?>">Meu Cadastro</a></li>
			<?php }?>
			
		</ul>

		<div class="clr"></div>
	</div>
</div>
