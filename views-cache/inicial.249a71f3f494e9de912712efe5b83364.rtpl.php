<?php if(!class_exists('Rain\Tpl')){exit;}?>        <!-- Modal -->


        <?php if( $error!= '' ){ ?>
        <script>
          $(document).ready(function(){
            $('#modalerror').modal('show')
          });
        </script>
        <?php } ?>
        <div class="modal" id="modalerror" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5>Ops... Algo não deu certo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mt-0 mb-0">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
              </div>
              <div class="modal-footer mt-0">
                <!--<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>-->
                <?php if( $error=='Usuario inexistente ou senha inválida' ){ ?>
                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#login-tela"
                  class="btn btn-success my-2 my-sm-0 btn-sm" id="btn-transition">Tente novamente</button>
                <?php }else{ ?>
                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#cadastro-tela"
                  class="btn btn-success my-2 my-sm-0 btn-sm" id="btn-transition">Tente novamente</button>
                <?php } ?>
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

      <section class="ftco-services ftco-no-pb mb-0">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/qualificado.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Time Qualificado</h3>
                <p>Contatmos Com o Melhor Time De Professores do Mercado Para Garantir Sua Aprovação.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-info">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/excl.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Material Exclusivo</h3>
                <p>Nossos Materiais e Apostilas São Preparadas Exclusivamente Por Nossa Equipe de Educadores.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/tradicao.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Anos de Tradição</h3>
                <p> O Mais Tradicional da Cidade Com +18 Anos de tradição No Mercado, Com Milhares De Aprovados.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-info">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/campeao.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Maior Estrutura</h3>
                <p>03 Unidades Equipadas Com a Melhor e Maior Estrutura Entre Pré-Vestibulares do MA.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------->


<section   class="historia">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url(/res/site/img/about.jpg); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Ainda Não Estuda Com a Gente?</h2>
            <p>Você, aluno de fora que ainda não conhece todas as vantagens de ser aluno Evolução, vamos te apresentar algumas delas:</p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-start"><img src="/res/site/img/sala-de-aula.png"></div>
                  <div class="text pl-3">
                    <h3>Salas de Estudo</h3>
                    <p>Todas Nossas Unidades Possuem Salas de Estudo Climátizadas e Equipadas para Você Se Preparar da Melhor Forma.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-start"><img src="/res/site/img/turmas-exclusivas.png"></div>
                  <div class="text pl-3">
                    <h3>Turmas Exclusivas</h3>
                    <p>Você que deseja se preparar tanto para o Enem,Uema e outros vestibulares do Brasil temos turmas de preparação exclusivas .</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/clima.png"></div>
                  <div class="text pl-3">
                    <h3>Salas Climátizadas</h3>
                    <p>Todas as Unidades Possuem Ambiente Climátizado e Espaço Para Garantir o Seu Conforto.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/predio.png"></div>
                  <div class="text pl-3">
                    <h3>Estrutura Incrível</h3>
                    <p>São 3 Unidades Com Salas Incríveis, Microondas, Lanchonete, Salas de Estudo.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/resultados.png"></div>
                  <div class="text pl-3">
                    <h3>Resultados Comprovados</h3>
                    <p>Ao Longo De Nossa História São Milhares de Aprovações Em Universidades de Todo Brasil e Exterior.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/desconto.png"></div>
                  <div class="text pl-3">
                    <h3>Descontos Exclusivos</h3>
                    <p>Você Aluno De Fora de Escolas Públicas e Escolas Conveniadas Possui Descontos Exclusivos Com a Gente. Entre em Contato!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-------------------------------------------------------------------------------------------------------------------------->


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/res/site/img/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
          <div class="col-md-6 align-items-stretch d-flex">
            <div class="img img-video d-flex align-items-center" style="background-image: url(/res/site/img/about-2.jpg);">
              <div class="video justify-content-center">
                <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                  <span class="ion-ios-play"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Um Pouco Da Nossa História...</h2>
            <p class="text-bold">Há 20 anos atrás, em uma sala pequena próxima ao elevado da Cohama, surgia o curso a partir do sonho dos professores Antônio José, Marquesluís e Rachel. De lá para cá, foram várias conquistas até nos tornarmos um dos cursos pré-vestibulares mais tradicionais do estado.</p>
            <p>Nosso maior orgulho é poder ajudar a escrever a história de vários alunos e ter participado de suas conquistas. E queremos continuar nesse caminho, participando das conquistas de nossos alunos.</p>
          </div>
        </div>  
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-lg-12">
            <div class="row d-md-flex align-items-center">
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="18">+18</strong>
                    <span>Anos de tradição</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="401">03</strong>
                    <span>Unidades</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="30">∞</strong>
                    <span>aprovações</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="50">06</strong>
                    <span>Turmas Regulares</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!----------------------------------------------------------------------------------------------------------------------->

            <div class="container mt-5 mb-0">
                <div class="row justify-content-center mb-5 pb-2">
                  <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Histórias de Sucesso</h2>
                    <p>Separamos pra você a história de sucesso de alguns alunos vencedores que conquistaram a tão sonhada aprovação estudando com a gente.</p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-center ">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                          
                          <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                  <div class="img-box"><img src="/res/site/img/carlos.jpg" alt=""></div>
                                  <p class="testimonial">Boa noite Meu nome é CLAUDETE sou mãe de CARLOS QUARESMA, aluno deste tão conceituado CURSO EVOLUÇÃO. Neste momento meu sentimento é de gratidão a Deus p Vitória do meu filho VESTIBULAR MEDICINA, e segundo lugar ao professor MARQUES que acreditou no sonho objetivo de meu filho e abriu as portas do CURSO EVOLUÇÃO p ele investir no seu sonho ganhar e adquirir conhecimento para q hoje ele junto com todos ds família e amigos podessemos compartilhar junto à ele este momento unico de felicidade.</p>
                                  <p class="overview"><b>Carlos Quaresma</b>, Medicina UFMA e UEMA</p>
                                </div>
                                <div class="item carousel-item">
                                  <div class="img-box"><img src="/res/site/img/denise.jpg" alt=""></div>
                                  <p class="testimonial">O GRITO DE 5 ANOS!
                                    Denise Carvalho, “MURI” de muriçoca, uma das melhores alunas do colégio @upaon_oficial, só que “esqueceu” de passar de primeira. Matriculou-se no evolução só para confirmar que uma vaga de medicina seria sua e rápido.Isso foi em 2015, de lá pra cá ela teve que aprender a recomeçar, mas ao longo desses infindáveis 5 anos ela sempre foi muito voluntariosa com os amigos, com a família, com a igreja e com sua fé. Denise foi aprovada em 2020 após 5 ANOS de luta </p>
                                                                      <p class="overview"><b>Denise Carvalho</b>, Medicina UFMA</p>
                                </div>
                                <div class="item carousel-item">
                                  <div class="img-box"><img src="/res/site/img/marcos.jpg" alt=""></div>
                                  <p class="testimonial">Desde 2017, depois de 3 anos formado em Engenharia Mecânica sem a tão esperada promoção, a estabilidade de uma carreira pública despertou a atenção de Marcos. Na época ele trabalhava há 7 anos numa empresa privada com benefícios como plano de saúde e vale alimentação, Mas deciciu largar tudo e se matricular no Evolução em busca da estabilidade de uma carreira pública. Em 2020 Marcos foi aprovado para o CFO-BM UEMA</p>
                                  <p class="overview"><b>Marcos Almeida</b>, CFO-BM</p>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                              <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                              <i class="fa fa-angle-right"></i>
                            </a>
                      </div>
                    </div>
                </div>
            </div>

        <div class="section-heading">
                            <h5>No Nosso Portal Online Você Terá</h5>
        </div>
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
                            <h3>O Melhor Time da Cidade</h3>
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
                                    <h5>Arnaldo Gomes</h5>
                                    <span>Língua Portuguesa</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/arnaldogomes13"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                                    <h5>Marco Rodrigues</h5>
                                    <span>Filosofia</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/marcorodriguesfilosofo"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                                    <h5>Antonio José</h5>
                                    <span>Matemática</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                                    <h5>Marquesluís</h5>
                                    <span>Química</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/marquesluiscarvalho"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                                    <h5>Saul Filho</h5>
                                    <span>Geografia</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/saul.filho"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t6.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Daniel Oliveira</h5>
                                    <span>Química</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/danieloliveira_qui"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t7.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Madson Matos</h5>
                                    <span>Biologia</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/madson_biologia"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t8.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Thayná Rosa</h5>
                                    <span>Sociologia</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/profthaynarosa"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t9.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Lízia Adriane</h5>
                                    <span>Língua Portuguesa</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/liziaadrianemagno"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t10.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>André Ricardo</h5>
                                    <span>Física</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/aandrefisica"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t11.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Viera Novais</h5>
                                    <span>Física</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t12.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Halneik Pontes</h5>
                                    <span>Matemática</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/halmtmfsc"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t13.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Getúlio Bessa</h5>
                                    <span>História</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t14.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Gláucio Carlos</h5>
                                    <span>Geografia</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/glauciocarlos"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t15.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Eliomar</h5>
                                    <span>Redação</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/eliocat"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t16.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Paulo Gereba</h5>
                                    <span>História</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t17.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Joadyson Lago</h5>
                                    <span>Física</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t18.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Artur Góes</h5>
                                    <span>Redação</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t19.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Milton</h5>
                                    <span>Língua Estrangeira</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                              <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t20.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Marilda</h5>
                                    <span>Língua Estrangeira</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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

       



    <!--================ Start Events Area =================-->
    <div id= "turmas" class="events_area mt-5 " style="background-color: #044d82;">
      <div class="container"  style="background-color: #044d82;">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Conheça Nossas Turmas</h2>
              <p class="text-white">
                Conquiste Sua Tão Sonhada Vaga na Universidade.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="res/site/img/e1.png" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>03</span>Unid.</div>

                  <div class="time-location">
                    <p>
                     <h2>Turma Cfo-Enem</h2> 
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> 15:00 - 18:30 (Vespertino)
                    </p>
                  </div>
                </div>
                <p>
                  Turma voltada para alunos que desejam seguir a carreira
                  militar mas sem abrir mão do vestibular tradicional, garantindo a preparação simultânea para UEMA e ENEM.
                </p>
               
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="res/site/img/e2.jpg" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>03</span>Unid.</div>

                  <div class="time-location">
                    <p>
                      <h2>Turma Medicina</h2> 
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> 07:30 - 12:40 (Matutino)
                    </p>
                  </div>
                </div>
                <p>
                  Turma intensiva voltada para alunos que desejam concretizar o sonho de estudar medicina.
                  Com carga horária extensa e preparação específica, sua vaga estará garantida.
                </p>
              
              </div>
            </div>
          </div>

         
        </div>
      </div>
    </div>
    <!--================ End Events Area =================-->



      


        

      