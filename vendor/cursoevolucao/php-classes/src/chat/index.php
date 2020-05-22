<?php 
include "db.php";
 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet"> 

	<script type="text/javascript">
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}

		req.open('GET', 'chat.php', true);
		req.send();
	}

	setInterval(function(){ajax();}, 1000);

	</script>


	<script type="text/javascript">

		function scroll() {
		  var objScrDiv = document.getElementById("caixa-chat");
		  objScrDiv.scrollTop = objScrDiv.scrollHeight;
		}
	</script>


	<title>Chat com PHP</title>

</head>
<!--ESTE ONLOAD AJAX É PARA ASSIM QUE A PÁGINA ABRIR ELE JÁ CARERGAR AS INFORMAÇÕES, SEM TER QUE ESPERAR 1 SEGUNDO PARA ISSO -->
<body onload="ajax();" onLoad="scroll();">

<div id="conteudo">
	<div id="caixa-chat" style="overflow-y:scroll; width:100%;">
		<div id="chat">
		
		<!-- LOCAL ONDE VAI CHAMAR O CHAT -->

		</div>
	</div>

	<div style="margin-top: 10px;">
		<form method="POST" action="index.php">
			<input type="text" name="nome" placeholder="Preencha seu Nome">
			<textarea maxlength="100" name="mensagem" placeholder="Insira uma mensagem"></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</div>

	<?php



	if(isset($_POST['enviar'])){
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
		$consulta = "INSERT INTO tb_mensagens (nome, mensagem) VALUES ('$nome', '$mensagem')";
		$executar = $conexao->query($consulta);
	}

	?>

</div>

</body>
</html>