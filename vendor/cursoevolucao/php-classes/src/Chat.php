<?php


namespace Evolucao;
use \Evolucao\DB\Sql;


class Chat{
	protected $nome;
	protected $mensagem;


	public function sent($nome, $mensagem){
		$sql= new Sql();
		$result= $sql->select("INSERT INTO tb_chat (nome,mensagem) VALUES (:nome,:mensagem)", array(
			":nome"=>$nome,
			":mensagem"=>$mensagem));
		return $result;
	}


}



?>