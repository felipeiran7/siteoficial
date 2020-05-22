<?php

			require("DB/Sql.php");
		

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
			     return $usuario;
		    }else{
			   throw new \Exception("Usuario inexistente ou senha inválida");
		    }
	  	


?>