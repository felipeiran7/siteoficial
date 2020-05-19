<?php if(!class_exists('Rain\Tpl')){exit;}?>
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
                                <p class="text-danger text-center">Usuário inexistente ou senha inválida</p>
                                <form action="/usuario/login" method="POST">
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
                                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                                </div> <!-- form-group// -->
                                <p class="text-center"><a href="http://google.com" class="link">Esqueceu a senha?</a></p>
                                </form>
                            </article>
                            </div> <!-- card.// -->

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
                                <p class="text-danger text-center">Usuário inexistente ou senha inválida</p>
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

        <section id="slide-area">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="/res/site/img/slider-1.jpg.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="/res/site/img/slider-2.png" alt="Second slide">
                  </div>
                  <!------
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div>
                  ----->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="cool-facts-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Single Cool Facts Area -->
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                            <div class="icon">
                                <img src="/res/site/img/hd-menor.png" alt="" class="img-fluid d-block">
                            </div>
                            <h5>Aulas FullHD</h5>
                        </div>
                    </div>
    
                    <!-- Single Cool Facts Area -->
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <img src="/res/site/img/chat.png" alt="" class="img-fluid d-block">
                            </div>
                            <h5 class="text-bold">Chat Interativo</h5>
                        </div>
                    </div>
    
                    <!-- Single Cool Facts Area -->
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                            <div class="icon">
                                <img src="/res/site/img/material.png" alt="" class="img-fluid d-block">
                            </div>
                            <h5>Material Exclusivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="best-tutors-area section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h3>O melhor time da cidade</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                            <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t1.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t2.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t3.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t4.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t5.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid mt-2" id="area-unidades">
            <div class="row">
                <div class="col col-md-3 mt-2">
                    <div class="card text-center">
                      <img class="card-img-top" src="https://picsum.photos/1900/1080?image=235" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Cohama</h5>
                        <hr>
                        <p>
                          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-map"></i> Mapa
                          </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                          <div class="card card-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-muted">
                        <div class="row">
                          <div class="col">
                            <a href="mailto:test@test.com"><i class="fa fa-whatsapp"></i></a>
                          </div>
                          <div class="col">
                            <a href="tel:+123456789"><i class="fa fa-phone"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col col-md-3 mt-2">
                    <div class="card text-center">
                      <img class="card-img-top" src="https://picsum.photos/1900/1080?image=235" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Cohama</h5>
                        <hr>
                        <p>
                          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-map"></i> Mapa
                          </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                          <div class="card card-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-muted">
                        <div class="row">
                          <div class="col">
                            <a href="mailto:test@test.com"><i class="fa fa-whatsapp"></i></a>
                          </div>
                          <div class="col">
                            <a href="tel:+123456789"><i class="fa fa-phone"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>




        

      