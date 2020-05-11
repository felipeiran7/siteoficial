<?php

namespace Evolucao\Model;
use \Evolucao\DB\Sql;
use \Evolucao\Model;


class Aluno extends Admin{

	protected $unidade;

  	public function insert(){
  		$sql=  new Sql();
  		$result= $sql->select("CALL save_return(:nome,:cpf,:turma,:unidade)", array(
  			":nome"=>$this->getnome(),
  			":cpf"=>$this->getcpf(),
  			":turma"=>$this->getturma(),
  			"unidade"=>$this->getunidade()
  		));

  		$this->setData($result[0]);

  	}

  	public function update(){
  		$sql=  new Sql();
  		$result= $sql->select("CALL update_return(:nome,:cpf,:turma,:unidade)", array(
  			":nome"=>$this->getnome(),
  			":cpf"=>$this->getcpf(),
  			":turma"=>$this->getturma(),
  			"unidade"=>$this->getunidade()
  		));

  		$this->setData($result[0]);

  	}

  	public function delete(){
  		$sql=  new Sql();
  		$result= $sql->query("DELETE FROM tb_alunos_casa WHERE cpf=:cpf", array(
  			":cpf"=>$this->getcpf(),
  		));
  	}

  	public function get($cpf){
  		$sql= new Sql();
  		$results= $sql->select("SELECT *FROM tb_alunos_casa WHERE cpf=:cpf", array(":cpf"=>$cpf));
  		$this->setData($results[0]);
  	}

  	public static function listAll(){

  		$sql= new Sql();
  		return $sql->select("SELECT *FROM tb_alunos_casa ORDER BY nome");


  	}







}


?>