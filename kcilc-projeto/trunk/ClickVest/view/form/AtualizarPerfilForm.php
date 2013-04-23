<form class="form_cad" method='POST' action='<?php echo Proxy::action(AtualizarPerfilAction::$NM_ACTION)?>' target="_top">
	
	<label class="altr">* Campos Obrigatórios</label>
	<br/>
	<label><strong>Dados Pessoais</strong></label>
	<br/>
	<br/>
				
	<label class="wh400">Nome: <span>*</span> </label>
	<label class="wh200">CPF: <span>*</span> </label>
	<label class="wh200">RG: <span>*</span> </label>
	
	<input class="wh377 epc" id="<?php echo Proxy::encrypt('nome');?>" value='<?php echo $usuario->getNome();?>' name="<?php echo Proxy::encrypt('nome');?>" type="text"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('nome');?>");'/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('cpf');?>" value="<?php echo $usuario->getCpf();?>" name="<?php echo Proxy::encrypt('cpf');?>" type="text"/>
	<input class="wh176" id="<?php echo Proxy::encrypt('rg');?>" value="<?php echo $usuario->getRg();?>" name="<?php echo Proxy::encrypt('rg');?>" type="text"/>
	
	<br/>
	<br/>
	<label><strong>Endereço</strong></label>
	<br/>
	<br/>
	
	<label class="wh400">CEP: <span>*</span> </label>
	<br/>
	<input class="wh176" id="<?php echo Proxy::encrypt('cep');?>" value="<?php echo $usuario->getCep();?>" name="<?php echo Proxy::encrypt('cep');?>" type="text"/>
	<br/>
	
	<label class="wh400">Rua: <span>*</span> </label>
	<label class="wh200">Número: <span>*</span> </label>
	<label class="wh200">Bairro: <span>*</span> </label>
	
	<input class="wh377 epc" id="<?php echo Proxy::encrypt('rua');?>" value="<?php echo $usuario->getRua();?>" name="<?php echo Proxy::encrypt('rua');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('numero');?>" value="<?php echo $usuario->getNumero();?>" name="<?php echo Proxy::encrypt('numero');?>" type="text"/>
	<input class="wh176" id="<?php echo Proxy::encrypt('bairro');?>" value="<?php echo $usuario->getBairro();?>" name="<?php echo Proxy::encrypt('bairro');?>" type="text"/>
	
	<label class="wh400">Complemento: <span>*</span> </label>
	<label class="wh200">Cidade: <span>*</span> </label>
	<label class="wh200">Estado: <span>*</span> </label>
	
	<input class="wh377 epc" id="<?php echo Proxy::encrypt('complemento');?>" value="<?php echo $usuario->getComplemento();?>" name="<?php echo Proxy::encrypt('complemento');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('cidade');?>" value="<?php echo $usuario->getCidade();?>" name="<?php echo Proxy::encrypt('cidade');?>" type="text"/>
	<input class="wh176" id="<?php echo Proxy::encrypt('estado');?>" value="<?php echo $usuario->getEstado();?>" name="<?php echo Proxy::encrypt('estado');?>" type="text"/>
	
	<br/>
	<br/>
	<label class="wh376"><strong>Contato</strong></label>
	<br/>
	<br/>
	
	<label class="wh200">Telefone:</label>
	<label class="wh200">Celular: <span>*</span> </label>
	<label class="wh200">Email: <span>*</span></label>
	<label class="wh200">Confirme seu Email: <span>*</span></label>
	
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('telefone');?>" value="<?php echo $usuario->getTelefone();?>" name="<?php echo Proxy::encrypt('telefone');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('celular');?>" value="<?php echo $usuario->getCelular();?>" name="<?php echo Proxy::encrypt('celular');?>" type="text"/>
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('email');?>" value='<?php echo $usuario->getEmail();?>' name="<?php echo Proxy::encrypt('email');?>" type="text" readonly="readonly" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('email');?>");'/>
	<input class="wh176" id="<?php echo Proxy::encrypt('remail');?>" value='<?php echo $usuario->getEmail();?>' name="<?php echo Proxy::encrypt('email');?>" type="text" readonly="readonly" onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('email');?>");'/>
	
	<br/>
	<br/>
	<label class="wh376"><strong>Acesso ao Site</strong></label>
	<br/>
	<br/>
	
	<label class="wh200">Crie a sua senha:  <span>*</span></label>
	<label class="wh200">Confirme a sua senha:  <span>*</span></label>
	<br/>
	
	<input class="wh176 epc" id="<?php echo Proxy::encrypt('senha');?>" value='<?php echo $usuario->getSenha();?>' name="<?php echo Proxy::encrypt('senha');?>" type="password"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('senha');?>");'/>
	<input class="wh176" id="<?php echo Proxy::encrypt('rsenha');?>"  value='<?php echo $usuario->getSenha();?>' name="<?php echo Proxy::encrypt('rsenha');?>" type="password"  onfocus='ajuda(this, "ajuda_<?php echo Proxy::encrypt('rsenha');?>");'/>
	<br/>
	<br/>
	
	<input type="submit" id="botao_atualizar" class='btn btn-primary btn-large' value="Atualizar" />

</form>

<div class="clr"></div>

<br/>