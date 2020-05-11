<?php

namespace Evolucao\Model;
use \Evolucao\DB\Sql;
use \Evolucao\Model;
use \Evolucao\Mailer;

/**
 * 
 */
class Usuario extends Model
{
	protected $nome;
	protected $cpf;
	protected $email;
	protected $turma;
	protected $unidade;
	protected $senha;

	const SESSION= "User";
	const SECRET = "Usuario_Secret_C";
	const SECRET_IV = "Usuario_Secret_I";

	 	public function insert($usuario= array()){
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
	  					$result3= $sql->select("CALL save_return_usuario(:nome,:cpf,:email,:turma,:unidade,:senha)", array(
  							":nome"=>$dados["nome"],
  							":cpf"=>$this->getcpf(),
  							":email"=>$this->getemail(),
  							":turma"=>$dados["turma"],
  							":unidade"=>$dados["unidade"],
  							":senha"=>$this->getsenha(),
  						));

  					$this->setData($result3[0]);
  				}
	  		}
  		}

  		public function login($login, $password){
	  		$sql= new Sql();
  		 	$result= $sql->select("SELECT *FROM tb_usuarios WHERE cpf=:LOGIN OR email=:LOGIN", array(":LOGIN"=>$login));

    		if(count($result)===0){
  			   throw new \Exception("Usuario inexistente ou senha inválida");	
		    }

		    $dados= $result[0];

		    if($password == $dados["senha"]){
			     $usuario = new Usuario();
			     $usuario-> setData($dados);
			     $_SESSION[Usuario::SESSION]= $usuario->getValues();
			     echo "usuario fez login msm";
			     return $usuario;
		    }else{
			   throw new \Exception("Usuario inexistente ou senha inválida");
		    }
	  	}

	  	public static function getForgot($email){
	  		$sql= new Sql();
	  		$results= $sql->select("SELECT *FROM tb_usuarios WHERE email=:email", array(
	  			":email"=>$email));

	  		if(count($results)===0){
	  			throw new \Exception("Não foi possível recuperar a senha");
	  			
	  		}else{
	  			$data= $results[0];
	  			$results2= $sql->select("CALL usuario_recovery_create(:cpf,:ip)", array(":cpf"=>$data["cpf"],":ip"=>$_SERVER["REMOTE_ADDR"]
	  			));

	  			$user= $sql->select("SELECT *FROM tb_usuarios WHERE email=:email", array(":email"=>$email));

	  			$user= $user[0];

	  			if(count($results2)===0){
	  				throw new Exception("não foi possível recuperar a senha");
	  				
	  			}else{
	  				$datarecovery= $results2[0];
	  				$code= base64_encode(openssl_encrypt($datarecovery["idrecovery"], 'AES-128-CBC',pack("a16", Usuario::SECRET), 0, pack("a16", Usuario::SECRET_IV)));

	  				$link= "http://www.cursoevolucao.com.br/usuario/forgot/reset?code=$code";
	  				$mailer= new Mailer($email,$user["nome"], "Redifir Senha do Portal Evolucao", "forgot", array("name"=>$user["nome"],"link"=>$link));

	  				$mailer->send();
	  				return $user;

	  			}
	  		}
	  	}


	  	public static function validForgotDecrypt($code){

	  		$idrecovery= openssl_decrypt(base64_decode($code), 'AES-128-CBC',pack("a16", Usuario::SECRET), 0, pack("a16", Usuario::SECRET_IV));

			$sql= new Sql();

			$results= $sql->select("SELECT *FROM tb_usuarios_recovery a INNER JOIN tb_usuarios b USING(cpf) WHERE a.idrecovery=:idrecovery  and a.dtrecovery is null and
			DATE_ADD(dtregister, INTERVAL 1 HOUR) >= NOW()",array(":idrecovery"=>$idrecovery));
	  			
	  	
			if(count($results)===0){
				throw new \Exception("Não foi possivel recuperar a senha");
				
			}else{
					return $results[0];
			}
			

	  	}


  		public static function setForgotUsed($idrecovery){
  			$sql= new Sql();

  			$sql->query("UPDATE tb_usuarios_recovery SET dtrecovery = NOW() WHERE idrecovery=:idrecovery", array(":idrecovery"=>$idrecovery));
  		}

  		public function setPassword($password){
  			$sql = new Sql();
  			$sql->query("UPDATE tb_usuarios set senha=:password WHERE cpf=:cpf", array(
  				":password"=>$password,":cpf"=>$this->getcpf()));
  		}


  		public function get($cpf){
  			$sql= new Sql();
  			$results= $sql->select("SELECT *FROM tb_usuarios WHERE cpf=:cpf", array(":cpf"=>$cpf));
  			$this->setData($results[0]);
  		}


  		public static function listAll(){
  			$sql= new Sql();
  			return $sql->select("SELECT *FROM tb_usuarios ORDER BY nome");
  		}
}



?>