<?php 


require_once($_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php");
use Evolucao\DB\Sql;


	$sql= new Sql();
	$result= $sql->select("SELECT *FROM tb_usuarios WHERE stats=:stats and in_aula=:in_aula", array(
	  			":stats"=>"online", ":in_aula"=>"YES"
	  		));
	echo (count($result). " Alunos assistindo aula no momento");


?>