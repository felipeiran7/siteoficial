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
	protected $instagram;
	protected $turma;
	protected $unidade;
	protected $senha;
	protected $turmaextra;
	protected $pago;
	protected $stats;
	protected $in_aula;

	const SESSION= "User";
	const SECRET = "Usuario_Secret_C";
	const SECRET_IV = "Usuario_Secret_I";
	const ERROR= "UserError";

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
	  					$result3= $sql->select("CALL save_return_usuario(:nome,:cpf,:email,:instagram,:turma,:unidade,:senha,:turmaextra,:pago,:stats,:in_aula)", array(
  							":nome"=>$dados["nome"],
  							":cpf"=>$this->getcpf(),
  							":email"=>$this->getemail(),
  							":instagram"=>$this->getinstagram(),
  							":turma"=>$dados["turma"],
  							":unidade"=>$dados["unidade"],
  							":senha"=>$this->getsenha(),
  							":turmaextra"=>1,
  							":pago"=>1,
  							":stats"=>"offline",
  							":in_aula"=>"NOT"
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
		    }else{

		    	$dados= $result[0];

		    	if($dados["stats"]=="offline"){
		    		if($password == $dados["senha"]){

		    		 $sql->query("UPDATE tb_usuarios SET stats=:stats WHERE cpf=:cpf", array("stats"=>"online","cpf"=>$dados["cpf"]));
				     $usuario = new Usuario();
				     $usuario-> setData($dados);
				     $_SESSION[Usuario::SESSION]= $usuario->getValues();
				     return $usuario;

		    		}else{
			   			throw new \Exception("Usuario inexistente ou senha inválida");
		   		 	}
		    	}else{
		    		throw new \Exception("Você já tem uma sessão ativa em outro local, saia de outro dispositivo para
		    			continuar");
		    	}  	
		    }
		}



	  	public function delete(){
	  		$sql=  new Sql();
	  		$result= $sql->query("DELETE FROM tb_usuarios WHERE cpf=:cpf", array(
	  			":cpf"=>$this->getcpf(),
	  		));
  		}

	  	public function atualiza(){
	  		$sql=  new Sql();
	  		$result= $sql->select("CALL update_usuario_admin(:nome,:cpf,:email,:instagram,:turma,:unidade,:senha,:turmaextra,:pago)", array(
	  			":nome"=>$this->getnome(),
	  			":cpf"=>$this->getcpf(),
	  			":email"=>$this->getemail(),
	  			":instagram"=>$this->getinstagram(),
	  			":turma"=>$this->getturma(),
	  			":unidade"=>$this->getunidade(),
	  			":senha"=>$this->getsenha(),
	  			":turmaextra"=>(int)$this->getturmaextra(),
	  			":pago"=>(int)$this->getpago()

	  		));

	  		$this->setData($result[0]);

  		}


	    public static function verifyLogin(){

	      if(!isset($_SESSION[Usuario::SESSION]) ||
	        !$_SESSION[Usuario::SESSION]){
	         throw new \Exception("Você precisa fazer login para acessar essa página");
	         exit;
	      }

	    }


		public static function checkLogin()
		{

			if (!isset($_SESSION[Usuario::SESSION])|| !$_SESSION[Usuario::SESSION]
			) {
				//Não está logado
				$_SESSION[Usuario::ERROR]= NULL;
				return false;
			}else{
				return true;
			}
		}


	  	public static function logout(){
	  		$sql=  new Sql();
	  		$cpf= $_SESSION[Usuario::SESSION]["cpf"];
      		$sql->query("UPDATE tb_usuarios SET stats=:stats WHERE cpf=:cpf", array("stats"=>"offline","cpf"=>$cpf));
      		$_SESSION[Usuario::SESSION]= NULL;
      		session_destroy();
   	    }


	  	public static function getForgot($email){
	  		$sql= new Sql();
	  		$results= $sql->select("SELECT *FROM tb_usuarios WHERE email=:email", array(
	  			":email"=>$email));

	  		if(count($results)===0){
	  			throw new \Exception("Não foi possível recuperar a senha, email não encontrado");
	  			
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
			DATE_ADD(dtregister, INTERVAL 2 HOUR) >= NOW()",array(":idrecovery"=>$idrecovery));

			if(count($results)===0){
				throw new \Exception("Não foi possivel recuperar a senha");
				
			}else{
					return $results[0];
			}
			

	  	}

	  	
		public static function getFromSession(){

				$user = new Usuario();

				if (isset($_SESSION[Usuario::SESSION]) && $_SESSION[Usuario::SESSION]['cpf'] != '') {

					$user->setData($_SESSION[Usuario::SESSION]);

				}

				return $user;

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

  		public static function setError($msg){

			$_SESSION[Usuario::ERROR] = $msg;

		}

	public static function getError(){

		$msg = (isset($_SESSION[Usuario::ERROR]) && $_SESSION[Usuario::ERROR]) ? $_SESSION[Usuario::ERROR] : '';

		Usuario::clearError();

		return $msg;

	}

	public static function clearError()
	{

		$_SESSION[Usuario::ERROR] = NULL;

	}

	public static function setSuccess($msg)
	{

		$_SESSION[Usuario::SUCCESS] = $msg;

	}

	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Usuario::SUCCESS]) && $_SESSION[Usuario::SUCCESS]) ? $_SESSION[Usuario::SUCCESS] : '';

		Usuario::clearSuccess();

		return $msg;

	}

	public static function clearSuccess()
	{

		$_SESSION[Usuario::SUCCESS] = NULL;

	}

	public static function setErrorRegister($msg)
	{

		$_SESSION[Usuario::ERROR_REGISTER] = $msg;

	}

	public static function getErrorRegister()
	{

		$msg = (isset($_SESSION[Usuario::ERROR_REGISTER]) && $_SESSION[Usuario::ERROR_REGISTER]) ? $_SESSION[Usuario::ERROR_REGISTER] : '';

		Usuario::clearErrorRegister();

		return $msg;

	}

	public static function clearErrorRegister()
	{

		$_SESSION[Usuario::ERROR_REGISTER] = NULL;

	}
}



?>