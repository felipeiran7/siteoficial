<?php 


require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    $sql = new Evolucao\DB\Sql();
    $results= $sql->select("SELECT *FROM tb_admin");

    echo json_encode($results);

});


$app->run();

?>