<script>
	$(document).ready(function(){
		$("#cad-msg").on('click', function(){
				
				$.ajax({
					url:'insert-msg.php',
					type: 'POST',
					data:{nome:$("#nome").val(),
					mensagem:$("#mensagem").val()},
				success:function(data){
					document.getElementById('mensagem').value = '';
				},
				error:function(data){
					console.log("nao consegui encontrar a pagina insert");
				}

				});
		});
	});

</script>

<script type="text/javascript">
	window.onbeforeunload= function(){
		$.ajax({
			url:'setaoffline.php?stats=offline',
			method: 'GET'
		});
	}


</script>

