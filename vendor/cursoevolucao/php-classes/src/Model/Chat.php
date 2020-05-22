<?php

namespace Evolucao\Model;
use \Evolucao\chat\SqlChat;
use \Evolucao\Model;

class Chat extends Model{
	protected $nome;
	protected $mensagem;

	 	public function insert($nome, $mensagem){
	  					$sql=  new SqlChat();
	  					$result3= $sql->select("INSERT INTO tb_mensagens (nome,mensagem) VALUES (:nome,:mensagem)", array(
  							":nome"=>$nome,
  							":mensagem"=>$mensagem
  						));
  		}
	  		
  		
}

?>
