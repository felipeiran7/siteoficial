<?php 


require_once("vendor/autoload.php");

use \Slim\Slim;
use \Evolucao\Page;
use \Evolucao\Model\Admin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page= new Page();
	$page->setTpl("index");
});

$app->post('/cadastro', function(){
	$user= new Admin();
	var_dump($_POST);

});


$app->run();

?>