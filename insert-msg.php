<?php

		
		   $servidor = "localhost";
		   $usuario = "root";
		   $password = "";
		   $bd = "chat";  
           $conexao = new mysqli($servidor,$usuario,$password,$bd);

           $data= 

           $consulta = "INSERT INTO tb_mensagens (nome, mensagem) VALUES ('".$_POST['nome']."','".$_POST['mensagem']."')";
		   $executar = $conexao->query($consulta);

		   if($executar){
		   	echo "cadastrado com sucesso";
		   }else{
		   	echo "houve um erro ao inserir";
		   }

?>