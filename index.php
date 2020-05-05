<?php 

session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Evolucao\Page;
use \Evolucao\Model\Admin;
use \Evolucao\PageAdmin;
use \Evolucao\Chat;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page= new Page();
	$page->setTpl("index");
});

$app->post('/cadastro', function(){
	$user= new Admin();
	$user->insert($_POST);

});

$app->get('/admin', function(){
	Admin::verifyLogin();
	$page= new PageAdmin();
	$page->setTpl("index");
});

$app->get('/admin/login', function(){
	$page= new PageAdmin(["header"=>false, "footer"=>false]);
	$page->setTpl("login");

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

$app->post('/chat/enviar', function(){
	$msg= new Chat();
	$result= $msg->sent("Nome Alguem",$_POST["mensagem"]);
	exit;

});

$app->get('/aula', function(){
	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("aula");
});

$app->run();

?>