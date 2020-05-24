<?php 

session_start();
require_once("vendor/autoload.php");
require_once("functions.php");


use \Slim\Slim;
use \Evolucao\Page;
use \Evolucao\Model\Admin;
use \Evolucao\Model\Aluno;
use \Evolucao\Model\Usuario;
use \Evolucao\Model\Aula;
use \Evolucao\PageAdmin;
use \Evolucao\Model\Chat;
use Evolucao\DB\Sql;
use \Evolucao\DB\Sqlchat;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

    if(isset($_SESSION["User"])){
        $_SESSION["User"]["stats"]= "online";
        $sql= new Sql();
        $sql->query("UPDATE tb_usuarios SET stats=:stats WHERE cpf=:cpf", array("stats"=>"online","cpf"=>$_SESSION["User"]["cpf"]));
    }else{
    }
   
	$page= new Page();
	$page->setTpl("inicial", ["error"=>'']);
});




// RETORNA ERRO CADASTRO ALUNO OU FAZ LOGIN APOS CADASTRO============================================================
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
//===============================================================================


//ENVIA DADOS CADASTRO ALUNO========================================================

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

//==============================================================================


//CARREGA PAGINA INICIAL ====================================================
$app->get('/admin', function(){
	Admin::verifyLogin();
	$page= new PageAdmin();
	$page->setTpl("index",array("name"=>$_SESSION["User"]["nome"]));
	exit;
});
//==========================================================================


//VAI PARA PAGINA DE LOGIN=========================================================

$app->get('/admin/login', function(){
	$page= new PageAdmin(["header"=>false, "footer"=>false]);
	$page->setTpl("login");
	exit;

});
//==============================================================




//LOGOT ADMIN==================================================
$app->get('/admin/logout', function(){
	Admin::logout();
	header("Location: /");
	exit;
});
//===================================================================



//ENVIA DADOS DE LOGIN ADMIN E CARREGA PAGINA INICIAL==============================================
$app->post('/admin/login', function(){
	$user = new Admin();
	$user->login($_POST["login"],$_POST["senha"]);
	header("Location: /admin");
	exit;

});
//===========================================================================================


//LOGIN DO USUARIO DO SITE====================================================
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
//=====================================================================


// FAZ LOGOUT ======================================================
$app->get('/usuario/logout', function(){
	Usuario::logout();
	header("Location: /");
	exit;
});
//==============================================================


// CARREGA PAGINA RESET SENHA =====================================================
$app->get("/usuario/forgot", function(){
	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-user");
	exit;
});
//=============================================================================

//ENVIA DADOS PARA PAGINA DE RECUPERACAO===========================================================

$app->post("/usuario/forgot", function(){
	$user= Usuario::getForgot($_POST["email"]);
	header("Location: /usuario/forgot/sent");
	exit;
});

//=====================================================================================================


// CARREGA PAGINA DE RECUPERACAO =========================================================================
$app->get("/usuario/forgot/sent", function(){
	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-sent-user");
	exit;
});
//=====================================================================================================

// CARREGA PAGINA RESET SENHA APOS EMAIL CLICADO=====================================================

$app->get("/usuario/forgot/reset", function(){
	$user= Usuario::validForgotDecrypt($_GET["code"]);

	$page= new Page(["header"=>false, "footer"=>false]);
	$page->setTpl("forgot-reset-user", array("name"=>$user["nome"],"code"=>$_GET["code"]));
	exit;
});

//========================================================================================



// PAGINA DE SUCESSO DE REDEFINIR SENHA ======================================================

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


//=========================================================================================


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
//==========================================================


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
	$page->setTpl("usuarios-update",array(
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

//POST UPDATE USUARIOS SITE
$app->post("/admin/usuarios/:cpf", function($cpf){
    Admin::verifyLogin();
    $user= new Usuario();
    $user->get($cpf);
    $user->delete();
    $user->setData($_POST);
    $user->atualiza();

    header("Location: /admin/usuarios");
    exit;

});
//=================================================




/*$app->post('/aula', function(){
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
	
});  CODIGO NAO UTILIZADO */
 






//CONTROLE DE AULAS TURMA MEDICINA ==============================================================================

$app->get('/admin/cadastro/aula/turmamed', function(){
	Admin::verifyLogin();
	$aula= Aula::listAll("medicina");
	$page= new PageAdmin();
	$page->setTpl("aulas-med", array(
		"turma"=>$aula[0]["turma"], "link"=>$aula[0]["link"]
	));
	exit;
});

$app->get("/admin/aula/medicina/editar/:turma", function($turma){
	Admin::verifyLogin();
	$aula= new Aula();
	$aula->get($turma);
	$dados=$aula->getValues();
	$page= new PageAdmin();
	$page->setTpl("aulas-med-update",array(
		"link"=>$dados["link"]));
	exit;
});


$app->post("/admin/aula/medicina/editar", function(){
	Admin::verifyLogin();
	$aula= new Aula();
	$aula->atualiza("medicina", $_POST["link"]);

	header("Location: /admin/cadastro/aula/turmamed");
	exit;
});

$app->get("/admin/aula/medicina/delete", function(){
	Admin::verifyLogin();
	$aula= new Aula();
	$aula->encerra("medicina","encerrado");
    $conexao = new mysqli("localhost","root","","chat");
    $query= "TRUNCATE TABLE tb_mensagens";
    $conexao->query($query);
	header("Location: /admin/cadastro/aula/turmamed");
	exit;
});

//======= FIM CONTROLE DE AULAS MEDICINA ====================================================================================








//=================== CONTROLE DE CADASTRO AULAS CFO-ENEM==================================================================

$app->get('/admin/cadastro/aula/turmacfo', function(){
    Admin::verifyLogin();
    $aula= Aula::listAll("CFO-ENEM");
    $page= new PageAdmin();
    $page->setTpl("aulas-cfo", array(
        "turma"=>$aula[0]["turma"], "link"=>$aula[0]["link"]
    ));
    exit;
});

$app->get("/admin/aula/cfo/editar/:turma", function($turma){
    Admin::verifyLogin();
    $aula= new Aula();
    $aula->get($turma);
    $dados=$aula->getValues();
    $page= new PageAdmin();
    $page->setTpl("aulas-cfo-update",array(
        "link"=>$dados["link"]));
    exit;
});


$app->post("/admin/aula/cfo/editar", function(){
    Admin::verifyLogin();
    $aula= new Aula();
    $aula->atualiza("CFO-ENEM", $_POST["link"]);

    header("Location: /admin/cadastro/aula/turmacfo");
    exit;
});

$app->get("/admin/aula/cfo/delete", function(){
    Admin::verifyLogin();
    $aula= new Aula();
    $aula->encerra("CFO-ENEM","encerrado");
    $conexao = new mysqli("localhost","root","","chat");
    $query= "TRUNCATE TABLE tb_mensagens";
    $conexao->query($query);

    header("Location: /admin/cadastro/aula/turmacfo");
    exit;
});
//=============================== CONTROLE DE CADASTRO CFO ENEM======================================================================



//=================== CONTROLE DE CADASTRO AULAS ESPECIAIS==================================================================

$app->get('/admin/cadastro/aula/turmaextra', function(){
    Admin::verifyLogin();
    $aula= Aula::listAll("EXTRA");
    $page= new PageAdmin();
    $page->setTpl("aulas-extra", array(
        "turma"=>$aula[0]["turma"], "link"=>$aula[0]["link"]
    ));
    exit;
});

$app->get("/admin/aula/extra/editar/:turma", function($turma){
    Admin::verifyLogin();
    $aula= new Aula();
    $aula->get($turma);
    $dados=$aula->getValues();
    $page= new PageAdmin();
    $page->setTpl("aulas-extra-update",array(
        "link"=>$dados["link"]));
    exit;
});


$app->post("/admin/aula/extra/editar", function(){
    Admin::verifyLogin();
    $aula= new Aula();
    $aula->atualiza("EXTRA", $_POST["link"]);

    header("Location: /admin/cadastro/aula/turmaextra");
    exit;
});

$app->get("/admin/aula/extra/delete", function(){
    Admin::verifyLogin();
    $aula= new Aula();
    $aula->encerra("EXTRA","encerrado");
    $conexao = new mysqli("localhost","root","","chat");
    $query= "TRUNCATE TABLE tb_mensagens";
    $conexao->query($query);

    header("Location: /admin/cadastro/aula/turmaextra");
    exit;
});
//=====================================================================================================




$app->run();

?>