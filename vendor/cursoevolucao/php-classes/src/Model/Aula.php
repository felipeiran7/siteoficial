<?php

namespace Evolucao\Model;
use \Evolucao\DB\Sql;
use \Evolucao\Model;
use \Evolucao\Mailer;


/**
 * 
 */
class Aula extends Model
{
	protected $nome;
	protected $link;

	const SESSION= "User";
	const SECRET = "Usuario_Secret_C";
	const SECRET_IV = "Usuario_Secret_I";
	const ERROR= "UserError";


  		public function atualiza($turma, $link){
  			$sql= new Sql();
  		 	$result= $sql->query("UPDATE aulas SET link=:link WHERE turma=:turma", array(":turma"=>$turma, ":link"=>$link));
  		}

  		

  		public function get($turma){
  			$sql= new Sql();
  			$results= $sql->select("SELECT *FROM aulas WHERE turma=:turma", array(":turma"=>$turma));
  			$this->setData($results[0]);
  		}


  		public static function listAll($turma){
  			$sql= new Sql();
  			return $sql->select("SELECT *FROM aulas WHERE turma=:turma", array("turma"=>$turma));
  		}

  		public function encerra($turma,$link){
  			$sql= new Sql();
  			$result= $sql->query("UPDATE aulas SET link=:link WHERE turma=:turma", array(":turma"=>$turma, ":link"=>$link));

  		}
}



?>