<?php
session_start();

require_once("vendor/autoload.php");
use Evolucao\DB\Sql;


	$cpf= $_SESSION["User"]["cpf"];
	$stats= $_GET['stats'];
	$sql= new Sql();
	$sql->query("UPDATE tb_usuarios SET stats=:stats,in_aula=:in_aula WHERE cpf=:cpf", array("stats"=>"offline","in_aula"=>"NOT","cpf"=>$_SESSION["User"]["cpf"]));


?>