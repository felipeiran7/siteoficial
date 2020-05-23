<?php

			const HOSTNAME = "127.0.0.1";
			const USERNAME = "root";
			const PASSWORD = "";
			const DBNAME = "siteevolucao";

			$sql=  new Sql();
	  		$result= $sql->select("SELECT *FROM tb_alunos_casa WHERE cpf=:cpf", array(
	  			":cpf"=>$usuario["cpf"]
	  		));

	  		if(count($result)>0){
	  			$dados= $result[0];
	  		}

	  		if(count($result)===0){
	  			throw new \Exception("CPF informado não consta como aluno Evolução");	
	  		}else{
	  			$result2= $sql->select("SELECT *FROM tb_usuarios WHERE cpf=:cpf", array(
	  			":cpf"=>$usuario["cpf"]
	  			));
	  			if(count($result2)>0){
	  				throw new \Exception("CPF informado já está cadastrado como usuário");	
	  			}else if(count($result2)===0){
	  					$result3= $sql->select("CALL save_return_usuario(:nome,:cpf,:email,:instagram,:turma,:unidade,:senha)", array(
  							":nome"=>$dados["nome"],
  							":cpf"=>$this->getcpf(),
  							":email"=>$this->getemail(),
  							":instagram"=>$this->getinstagram(),
  							":turma"=>$dados["turma"],
  							":unidade"=>$dados["unidade"],
  							":senha"=>$this->getsenha(),
  						));

  					$this->setData($result3[0]);
  				}
	  		}
?>