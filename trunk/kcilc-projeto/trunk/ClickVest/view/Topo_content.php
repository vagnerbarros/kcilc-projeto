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

			<li><a href="index.php">In�cio</a></li>

			<li>|</li>

			<li><a href="">Roupas Masculinas <img alt=""
					src="template/css/img/seta_down.png" height="6" />
			</a>
				<ul class="sub_menu">
					<li><a href=""> &rsaquo; Social</a></li>
					<li><a href=""> &rsaquo; Passeio Formal</a></li>
				</ul>
			</li>

			<li>|</li>

			<li><a href="">Roupas Femininas <img alt=""
					src="template/css/img/seta_down.png" height="6" />
			</a>
				<ul class="sub_menu">
					<li><a href=""> &rsaquo; Social</a></li>
					<li><a href=""> &rsaquo; Passeio Formal</a></li>
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
