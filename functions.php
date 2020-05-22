<?php

use \Evolucao\Model\Usuario;
use \Evolucao\chat\chat;
use \Evolucao\chat\db;

 function checkLogin(){
	return Usuario::checkLogin();
}

 function getUserNameSession(){

	$user = Usuario::getFromSession();

	return $user->getnome();
	
}


function error(){
	return Usuario::getError();
}


function checaEnvio(){

	if(isset($_POST['enviar'])){
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
		$consulta = "INSERT INTO tb_mensagens (nome, mensagem) VALUES ('$nome', '$mensagem')";
		$executar = $conexao->query($consulta);
	}
}




?>
