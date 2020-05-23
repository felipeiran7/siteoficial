<?

include "db.php";
			



			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$bd = "chat";  
           $conexao = new mysqli($servidor,$usuario,$password,$bd);

				$nome = $_SESSION["User"]['nome'];
				$mensagem = $_GET['mensagem'];
				$consulta = "INSERT INTO tb_mensagens (nome, mensagem) VALUES ('$nome', '$mensagem')";
				$executar = $conexao->query($consulta);
			


?>