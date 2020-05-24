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



function get_browser_name($user_agent){
	if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
   
    return 'Other';

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
