<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Evolução</title>
    <link rel="stylesheet" href="/res/site/node_modules/bootstrap/dist/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/res/site/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/res/site/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />

    <!-------------------- css site ------------------------------------>
    <link rel="stylesheet" href="/res/site/css/flaticon.css">
    <link rel="stylesheet" href="/res/site/css/owl.theme.default.min.css">

    <script type="text/javascript">
    window.onbeforeunload= function(){
        $.ajax({
            url:'setaoffline.php?stats=offline',
            method: 'GET'
        });
    }


</script>
     

    
</head>
<body>
    
    <header>
            <div class="top-header-area d-flex justify-content-between align-items-center">
                <!-- Contact Info -->
                <div class="contact-info">
                    <a href="/admin"><i class="fa fa-user"></i> Acesso Administrador</a>
                </div>
                <!-- Follow Us -->
                <div class="follow-us">
                    <span>Siga-nos:</span>
                    <a href="https://facebook.com/curso.evolucao"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>

            <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
                <a href="/" class="navbar-brand">
                    <img src="/res/site/img/logo2.png" alt="Logo"></a>
                               
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto ml-auto" id="menu-items">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>    
                        </li>
                        <li class="nav-item">
                            <a href="#turmas" class="nav-link">Turmas</a>    
                        </li>
                        <li class="nav-item">
                            <a href="#section-counter" class="nav-link">Quem somos</a>    
                        </li>
                    </ul>

                  
                  <?php if( checkLogin() ){ ?>
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-white" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o"></i><?php echo getUserNameSession(); ?></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="/aula.php"><i class="fa fa-book"></i> Minha Aula</a>
                                    <a class="dropdown-item" href="/usuario/logout"><i class="fa fa-close"></i> Sair</a>
                                </div>
                            </div>
                        </div>
                        <div class="userthumb">
                            <img src="/res/site/img/online-icon.png" alt="">
                        </div>
                    </div>   
                     <!-- Register / Login  -->
                    <?php }else{ ?>
                       <div id="area bottons-login">
                        <button type="button" data-toggle="modal" data-target="#cadastro-tela" class="btn btn-outline-light mr-1">Cadastre-se</button>
                        <button type="button" data-toggle="modal" data-target="#login-tela"
                        class="btn btn-info my-2 my-sm-0" id="btn-login">Fazer Login</button>
                    </div>    
                    <?php } ?>
                 
                </div>
            </nav>

            <div class="modal fade" id="login-tela" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <div class="card">
                            <article class="card-body">
                                <h1 class="card-title text-center mb-2 mt-1">Fazer Login</h1>
                                <hr>

                                
                                <div id="mensagem" class="d-flex justify-content-center align-items-center text-danger"></div>
                                <hr>
                                <form id="login-view" action="/usuario/login" method="POST">
                                        <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                             </div>
                                            <input name="login" class="form-control" placeholder="Email or login" type="text" required>
                                        </div> <!-- input-group.// -->
                                        </div> <!-- form-group// -->
                                        <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                             </div>
                                            <input name="senha_login" class="form-control" placeholder="******" type="password" required>
                                        </div> <!-- input-group.// -->
                                        </div> <!-- form-group// -->
                                        <div class="form-group">
                                        <button id="btn_login-go" type="submit" class="btn btn-primary btn-block"> Login  </button>
                                        </div> <!-- form-group// -->
                                        <p class="text-center"><a href="" data-toggle="modal" data-target="#reset-tela" class="link">Esqueceu a senha?</a></p>
                                </form>
                            </article>
                            </div> <!-- card.// -->

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reset-tela" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="container">
                         <div class="modal-header">
                            <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                         </div>   

                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="panel panel-default">
                                          <div class="panel-body">
                                            <div class="text-center">
                                              <h3><i class="fa fa-lock fa-4x"></i></h3>
                                              <h2 class="text-center">Esqueceu a senha?</h2>
                                              <p>Você pode resetá-la informando seu email abaixo.</p>
                                              <div class="panel-body">
                                
                                                <form action="/usuario/forgot"  method="POST">
                                
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <span class="input-group-addon"><i class="fa fa-envelope form-control"></i></span>
                                                          <input id="email" name="email" placeholder="email" class="form-control"  type="email">
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <input name="recover-submit" class="btn btn-primary btn-block" value="Resetar Senha" type="submit">
                                                      </div>
                                                  
                                                  <input type="hidden" class="hide" name="token" id="token" value=""> 
                                                </form>
                                
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>   
                        </div>

                         <div class="modal-footer">
                             
                         </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="cadastro-tela" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <div class="card">
                            <article class="card-body">
                                <h1 class="card-title text-center mb-2 mt-1">Cadastre-se</h1>
                                <hr>
                                 <div class="col-md-12 control-label">
                                        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                                     </div>
                                <form action="/cadastro/aluno" method="POST" class="needs-validation">
                                        <div class="form-group">
                                            <label for="cpf" class="strong">CPF:<h11>*</h11></label>
                                            <input id="cpf" name="cpf" placeholder="XXXXXXXXXXX" class="form-control input-md" type="text" maxlength="11" pattern="[0-9]+$" required>     
                                            <small id="cpf-info" class="form-text text-muted">
                                                Informe seu CPF sem pontos e traços, apenas números.
                                            </small>
                                        </div> <!-- form-group// -->

                                        <div class="form-group">
                                            <label for="email" class="strong">E-mail:<h11>*</h11></label>
                                            <input id="email" name="email" placeholder="exemplo@email.com" class="form-control input-md" type="email" required>     
                                            <small id="email" class="form-text text-muted">
                                                Informe um email válido.
                                            </small>
                                        </div> <!-- form-group// -->

                                        <div class="form-group">
                                            <label for="instagram">Instagram:<h11>*</h11></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">@</span>
                                                </div>
                                                <input class="form-control" placeholder="Usuario" type="text" id="instagram" name="instagram" required> 
                                            </div> <!-- input-group.// -->      
                                        </div> <!-- form-group// -->

                                        <div class="form-group">
                                            <label for="senha">Senha:<h11>*</h11></label>
                                            <input class="form-control" placeholder="*******" type="password" id="senha" name="senha" required> 
                                            <small id="senha" class="form-text text-muted">
                                                Evite senhas curtas e fáceis, ex: 12345
                                            </small>    
                                        </div> <!-- form-group// -->

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                        </div> <!-- form-group// -->
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="mr-auto p-2 bd-highlight"></div>
                                            <div class="p-2 bd-highlight mt-auto"><p class="mt-auto">Já tem conta?</p></div>
                                            <div class="p-2 bd-highlight"><button type="button" data-dismiss="modal" data-toggle="modal" data-target="#login-tela"
                                                class="btn btn-success my-2 my-sm-0 btn-sm" id="btn-transition">Fazer Login</button></div>
                                        </div>
                                </form>
                            </article>
                            </div> <!-- card.// -->

                    </div>
                </div>
            </div>
        </div>

      
        <script src="/res/site/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/res/site/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="/res/site/js/check.js"></script>    

            
    </header>