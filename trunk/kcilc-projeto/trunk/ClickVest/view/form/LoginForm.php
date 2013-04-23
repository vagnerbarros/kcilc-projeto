<form class="form-inline" method='POST' action='<?php echo Proxy::action(LoginAction::$NM_ACTION)?>'   onsubmit="return validarLoginForm();" target="_top">
	<label>Email:</label>
	<label>Senha:</label>
	<input id="<?php echo Proxy::encrypt('login_email');?>" name="<?php echo Proxy::encrypt('email');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('login_email');?>");'/>
	<input id="<?php echo Proxy::encrypt('login_senha');?>" name="<?php echo Proxy::encrypt('senha');?>" type="password"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('login_senha');?>");'/>
	<button type="submit" class='btn btn-primary btn-large'>Entrar</button>
	<br/>
	<a href="<?php echo Proxy::page(CadastroUsuarioPage::$NM_PAGINA);?>">Cadastre-se</a><br>
	<a class='transition' href='#'>Esqueceu sua senha?</a>
</form>