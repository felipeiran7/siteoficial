<?php 


		namespace 	Evolucao\chat;
		require ("SqlChat.php");

		$consulta = "SELECT * FROM tb_mensagens";
		$sql= new SqlChat();
		$executar = $sql->select($consulta);
		var_dump($executar);
