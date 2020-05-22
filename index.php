<?php 

session_start();
require_once("vendor/autoload.php");
require_once("functions.php");


use \Slim\Slim;
use \Evolucao\Page;
use \Evolucao\Model\Admin;
use \Evolucao\Model\Aluno;
use \Evolucao\Model\Usuario;
use \Evolucao\PageAdmin;
use \Evolucao\Model\Chat;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
	$page= new Page();
	$page->setTpl("inicial", ["error"=>'']);
});





$app->get('/cadastro/aluno', function(){
	$user= new Usuario();
	$user->setData($_POST);
	try{
		$user->insert($_POST);
		header("Location: /");
	}catch(Exception $e){
		$page= new Page();
		$error= $e->getMessage();
		$page->setTpl("inicial", ["error"=>$error]);
	}
	exit;

});

$app->post('/cadastro/aluno', function(){
	$user= new Usuario();
	$user->setData($_POST);
	try{
		$user->insert($_POST);
		Usuario::login($_POST["cpf"],$_POST["senha"]);
		header("Location: /");
	}catch(Exception $e){
		$page= new Page();
		$error= $e->getMessage();
		$page->setTpl("inicial", ["error"=>$error]);
	}
	exit;

});

$app->get('/admin', function(){
	Admin::verifyLogin();
	//var_dump($_SESSION["User"]["nome"]);
	$page= new PageAdmin();
	$page->setTpl("index",array("name"=>$_SESSION["User"]["nome"]));
	exit;
});

$app->get('/admin/login', function(){
	$page= new PageAdmin(["header"=>false, "footer"=>false]);
	$page->setTpl("login");
	exit;

});

$app->get('/admin/logout', function(){
	Admin::logout();
	header("Location: /admin/login");
	exit;
});

$app->post('/admin/login', function(){
	$user = new Admin();
	$user->login($_POST["login"],$_POST["senha"]);
	header("Location: /admin");
	exit;

});


//LOGIN DO USUARIO DO SITE
$app->post('/usuario/login', function(){
	
	try{
	$user = new Usuario();
		$user->login($_POST["login"],$_POST["senha_login"]);
		header("Location: /");
	}catch(Exception $e){
		Usuario::setError($e->getMessage());
		$page= new Page();
		$error= $e->getMessage();
		$page->setTpl("inicial", ["error"=>$error]);

	}
	exit;

}); 



$app->get('/usuario/logout', function(){
	Usuario::logout();
	header("Location: /");
	exit;
});
//==============================================================

$app->get("/usuario/forgot", function(){
	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-user");
	exit;
});


$app->post("/usuario/forgot", function(){
	$user= Usuario::getForgot($_POST["email"]);
	header("Location: /usuario/forgot/sent");
	exit;
});

$app->get("/usuario/forgot/sent", function(){
	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-sent-user");
	exit;
});

$app->get("/usuario/forgot/reset", function(){
	$user= Usuario::validForgotDecrypt($_GET["code"]);

	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-reset-user", array("name"=>$user["nome"],"code"=>$_GET["code"]));
	exit;
});


$app->post("/usuario/forgot/reset", function(){
	$forgot= Usuario::validForgotDecrypt($_POST["code"]);
	Usuario::setForgotUsed($forgot["idrecovery"]);

	$user= new Usuario();
	$user->get($forgot["cpf"]);

	$user->setPassword($_POST["password"]);

	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-reset-success-user");

	exit;

});


//CARREGA ALUNOS DA CASA
$app->get("/admin/alunos", function(){
	Admin::verifyLogin();
	$users= Aluno::listAll();
	$page= new PageAdmin();
	$page->setTpl("alunos", array(
		"users"=>$users
	));
	exit;

});
//==============================================


//CARREGA USUARIOS DO SITE
$app->get("/admin/usuarios", function(){
	Admin::verifyLogin();
	$usuarios= Usuario::listAll();
	$page= new PageAdmin();
	$page->setTpl("usuarios", array(
		"users"=>$usuarios
	));
	exit;

});
//==============================================

//CARREGA PAGINA CREATE ALUNO
$app->get("/admin/alunos/create", function(){
	Admin::verifyLogin();
	$page= new PageAdmin();
	$page->setTpl("alunos-create");
	exit;

});
//======================================================

//DELETA OS ALUNOS DA CASA
$app->get("/admin/alunos/:cpf/delete", function($cpf){
	Admin::verifyLogin();
	$aluno= new Aluno();
	$aluno->get($cpf);
	$aluno->delete();
	header("Location: /admin/alunos");
	exit;


});
//====================================================


//CARREGA A PAGINA EDITAR ALUNOS
$app->get("/admin/alunos/:cpf", function($cpf){
	Admin::verifyLogin();
	$aluno= new Aluno();
	$aluno->get($cpf);
	$page= new PageAdmin();
	$page->setTpl("alunos-update",array(
		"aluno"=>$aluno->getValues()));
	exit;
});
//=========================================================

//CARREGA A PAGINA EDITAR USUARIOS DO SITE
$app->get("/admin/usuarios/:cpf", function($cpf){
	Admin::verifyLogin();
	$usuario= new Usuario();
	$usuario->get($cpf);
	$page= new PageAdmin();
	$page->setTpl("alunos-update",array(
		"aluno"=>$usuario->getValues()));
	exit;
});
//=========================================================


//POST CREATE ALUNOS DA CASA
$app->post("/admin/alunos/create", function(){
	Admin::verifyLogin();
	$aluno = new Aluno();
	$aluno->setData($_POST);
	$aluno->insert();
	header("Location: /admin/alunos");
	exit;

});
//======================================================

//POST UPDATE ALUNOS CASA
$app->post("/admin/alunos/:cpf", function($cpf){
	Admin::verifyLogin();
	$aluno= new Aluno();
	$aluno->get($cpf);
	$aluno->delete();
	$aluno->setData($_POST);
	$aluno->insert();

	header("Location: /admin/alunos");
	exit;

});
//=================================================


$app->post('/aula', function(){
	if(isset($_POST['enviar'])){
		$sql = new Chat();
		$sql->insert($_POST['nome'],$_POST['mensagem']);
		header("Location: /aula");
	}
});

$app->get('/aula', function(){
	if(Usuario::checkLogin()){
		$page= new Page();
		$page->setTpl("aula");
	}else{
		header("Location: /");
	}
	
});

$app->run();

?>