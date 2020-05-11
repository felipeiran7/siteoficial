<?php

namespace Evolucao\Model;
use \Evolucao\DB\Sql;
use \Evolucao\Model;


  class Admin extends Model{
  	protected $cpf;
  	protected $nome;
  	protected $email;
  	protected $senha;
  	protected $turma;
  	const SESSION= "User";


  

  	public function Login($login, $password){
  		  $sql= new Sql();
  		  $result= $sql->select("SELECT *FROM tb_admin WHERE cpf=:LOGIN OR email=:LOGIN", array(":LOGIN"=>$login));

    		if(count($result)===0){
  			   throw new \Exception("Usuario inexistente ou senha inválida");	
		    }

		    $dados= $result[0];

		    if($password == $dados["senha"]){
			     $admin = new Admin();
			     $admin-> setData($dados);
			     $_SESSION[Admin::SESSION]= $admin->getValues();
			     return $admin;
		    }else{
			   throw new \Exception("Usuario inexistente ou senha inválida");
		    }

  	}


    public static function verifyLogin($inadmin= 1){

      if(!isset($_SESSION[Admin::SESSION]) ||
        !$_SESSION[Admin::SESSION] ||
        !(int)$_SESSION[Admin::SESSION]["id"]>0 ||
        (int)$_SESSION[Admin::SESSION]["stat"] !== $inadmin){
         header("Location: /admin/login");
         exit;
      }

    }


    public static function logout(){
      $_SESSION[Admin::SESSION]= NULL;
    }



  }



?>.