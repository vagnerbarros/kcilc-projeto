
function submeterReserva() {
	form_reserva.submit();
}

$(function() {
	$('#menu li').bind('mouseenter',function(){
		var $elemento = $(this);
		$submenu = $elemento.find('.sub_menu');
		$submenu.css('border','solid 1px #CCCCCC');
		$submenu
		.stop(true)
		.animate({
			'width':'150px',
			'height':'210px',
			'left':'0px'
		},1000,'easeOutBack');
	}).bind('mouseleave',function(){
		var $elemento = $(this);
		$submenu = $elemento.find('.sub_menu');
		$submenu
		.stop(true)
		.animate({
			'width':'150px',
			'height':'0px',
			'left':'0px'
		},500,'easeOutBack');
		$submenu.css('border','none');
	});
});

$(function() {
	$('#lista_produtos li').bind('mouseenter',function(){
		var $elemento = $(this);
		$submenu = $elemento.find('.flag_add_cart');
		$submenu
		.stop(true)
		.animate({
			'width':'150px',
			'height':'50px',
			'left':'0px'
		},250);
	}).bind('mouseleave',function(){
		var $elemento = $(this);
		$submenu = $elemento.find('.flag_add_cart');
		$submenu
		.stop(true)
		.animate({
			'width':'150px',
			'height':'0px',
			'left':'0px'
		},100);
	});
});

$(function() {
	
	$("#open").click(function(){
		document.getElementById("open").style.display = "none";
		document.getElementById("close").style.display = "block";
		$("#div_form_atualizar")
		.stop(true)
		.animate({
		    width:'900px',
		    height:'590px',
		}, 500);
		$("#div_dados")
		.stop(true)
		.animate({
			width:'0px',
			height:'290px',
		 }, 500);
	});
	
	$("#close").click(function(){
		document.getElementById("close").style.display = "none";
		document.getElementById("open").style.display = "block";
		$("#div_form_atualizar")
		.stop(true)
		.animate({
		    width:'0px',
			height:'262px',
		  }, 500);
		$("#div_dados")
		.stop(true)
		.animate({
			width:'400px',
			height:'334px',
		 }, 500);
	});
	
	
});

function submeter() {
	var dig = document.getElementById('txt_busca').value;
	alert(dig.lenght);
	if(dig!=""){
		form_busca.submit();
	}else{
		document.getElementById('txt_busca').focus();
	}
}


