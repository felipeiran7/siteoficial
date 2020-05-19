<?php 

session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Evolucao\Page;
use \Evolucao\Model\Admin;
use \Evolucao\Model\Aluno;
use \Evolucao\Model\Usuario;
use \Evolucao\PageAdmin;
use \Evolucao\Chat;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
	$page= new Page();
	$page->setTpl("inicial");
});

$app->post('/cadastro/aluno', function(){
	$user= new Usuario();
	$user->setData($_POST);
	$user->insert($_POST);

});

$app->get('/admin', function(){
	Admin::verifyLogin();
	$page= new PageAdmin();
	$page->setTpl("index");
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


// LOGIN DO USUARIO DO SITE
$app->post('/usuario/login', function(){
	$user = new Usuario();
	$user->login($_POST["login"],$_POST["senha_login"]);
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
	$msg= new Chat();
	$result= $msg->sent("Nome Alguem",$_POST["mensagem"]);
	header("Location: /aula");
	exit;

});

$app->get('/aula', function(){
	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("aula");
});

$app->run();

?>