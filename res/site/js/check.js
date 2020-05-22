$('document').ready(function(){
 
	$("#btn-login-go").click(function(){
		var data = $("#login-view").serialize();
			
		$.ajax({
			type : 'POST',
			url  : '/usuario/login',
			data : data,
			dataType: 'json',
			beforeSend: function()
			{	
				$("#btn-login-go").html('Validando ...');
			},
			success :  function(response){						
				if(response != ''){	
					$("#mensagem").html('<strong>Erro! </strong>' + response);
				}
				else{			
					window.location.href = "/";
				}
		    }
		});
	});
 
});