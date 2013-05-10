<form class="form_cad" method='POST' action='<?php echo Proxy::action(CadastroUsuarioAction::$NM_ACTION)?>' onsubmit="return validarCadastroForm();" target="_top">
	
	<label class="altr">* Campos Obrigatórios</label>
	<br/>
	<label><strong>Dados Pessoais</strong></label>
	<br/>
	<br/>
				
	<label class="wh400">Nome: <span>*</span> </label>
	<label class="wh200">CPF: <span>*</span> </label>
	<label class="wh200">RG: <span>*</span> </label>
	
	<input class="wh377 epc" id="<?php echo Proxy::encrypt('nome');?>" name="<?php echo Proxy::encrypt('nome');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('nome');?>");'/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('cpf');?>" name="<?php echo Proxy::encrypt('cpf');?>" type="text"/>
	<input class="wh176" id="<?php echo Proxy::encrypt('rg');?>" name="<?php echo Proxy::encrypt('rg');?>" type="text"/>
	
	<br/>
	<br/>
	<label><strong>Endereço</strong></label>
	<br/>
	<br/>
	
	<label class="wh400">CEP: <span>*</span> </label>
	<br/>
	<input class="wh176" id="<?php echo Proxy::encrypt('cep');?>" name="<?php echo Proxy::encrypt('cep');?>" type="text"/>
	<br/>
	
	<label class="wh400">Rua: <span>*</span> </label>
	<label class="wh200">Número: <span>*</span> </label>
	<label class="wh200">Bairro: <span>*</span> </label>
	
	<input class="wh377 epc" id="<?php echo Proxy::encrypt('rua');?>"  name="<?php echo Proxy::encrypt('rua');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('numero');?>" name="<?php echo Proxy::encrypt('numero');?>" type="text"/>
	<input class="wh176" id="<?php echo Proxy::encrypt('bairro');?>" name="<?php echo Proxy::encrypt('bairro');?>" type="text"/>
	
	<label class="wh400">Complemento: <span>*</span> </label>
	<label class="wh200">Cidade: <span>*</span> </label>
	<label class="wh200">Estado: <span>*</span> </label>
	
	<input class="wh377 epc" id="<?php echo Proxy::encrypt('complemento');?>" name="<?php echo Proxy::encrypt('complemento');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('cidade');?>" name="<?php echo Proxy::encrypt('cidade');?>" type="text"/>
	<input class="wh176" id="<?php echo Proxy::encrypt('estado');?>" name="<?php echo Proxy::encrypt('estado');?>" type="text"/>
	
	<br/>
	<br/>
	<label class="wh376"><strong>Contato</strong></label>
	<br/>
	<br/>
	
	<label class="wh200">Telefone:</label>
	<label class="wh200">Celular: <span>*</span> </label>
	<label class="wh200">Email: <span>*</span></label>
	<label class="wh200">Confirme seu Email: <span>*</span></label>
	
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone');?>" name="<?php echo Proxy::encrypt('telefone');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('celular');?>" name="<?php echo Proxy::encrypt('celular');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('email');?>" name="<?php echo Proxy::encrypt('email');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('email');?>");'/>
	<input class="wh176" id="<?php echo Proxy::encrypt('remail');?>" name="<?php echo Proxy::encrypt('remail');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('remail');?>");'/>
	
	<br/>
	<br/>
	<label class="wh376"><strong>Acesso ao Site</strong></label>
	<br/>
	<br/>
	
	<label class="wh200">Crie a sua senha:  <span>*</span></label>
	<label class="wh200">Confirme a sua senha:  <span>*</span></label>
	<br/>
	
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('senha');?>" name="<?php echo Proxy::encrypt('senha');?>" type="password"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('senha');?>");'/>
	<input class="wh176" id="<?php echo Proxy::encrypt('rsenha');?>" name="<?php echo Proxy::encrypt('rsenha');?>" type="password"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('rsenha');?>");'/>
	<br/>
	
	<?php include "view/components/Captcha.php"?>
	
	<label class="wh200"><a href="<?php echo Proxy::page(PoliticasAtendimentoPage::$NM_PAGINA);?>" target="_blank" style="color: black;">Políticas de Atendimento</a> <span>*</span></label>
	
	
	<input type="submit" class='btn btn-primary btn-large' id="submit_form" value="Confimar" />
	
</form>

<div class="clr"></div>

<br/>

