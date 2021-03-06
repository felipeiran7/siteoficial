<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Curso Evolução</title>

    <!-- Favicon -->
    <link rel="icon" href="/res/site/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/res/site/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

       

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="/res/site/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="single-course.html">Single Courses</a></li>
                                        <li><a href="instructors.html">Instructors</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Single Blog</a></li>
                                        <li><a href="regular-page.html">Regular Page</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                      
                            <!-- Register / Login -->

                            <div class="register-login-area">
                                <a href="#session_cad" class="btn" id="cadastrobtn">Cadastre-se</a>
                                <a href="#" class="fazer-login">Login</a>
                                <div id="login-container" style="display:none">
                                    <a class="links" id="paracadastro"></a>
                                        <a class="links" id="paralogin"></a>
                                        <div class="content">      
                                            <!--FORMULÁRIO DE LOGIN-->

                                            <div id="login">
                                                <form method="post" action=""> 
                                                    <h1>Login</h1> 
                                                    <p> 
                                                        <label for="email_login">Seu e-mail ou CPF</label>
                                                        <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com"/>
                                                    </p>
          
                                                    <p> 
                                                        <label for="senha_login">Sua senha</label>
                                                        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
                                                    </p>
          
                                                    <p> 
                                                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                                                        <label for="manterlogado">Manter-me logado</label>
                                                    </p>
          
                                                    <p> 
                                                        <input type="submit" value="Logar" /> 
                                                    </p>
          
                                                    <p class="link">
                                                        Ainda não tem conta?
                                                        <a href="#paracadastro">Cadastre-se</a>
                                                    </p>
                                                </form>
                                            </div>

                                            <!--FORMULÁRIO DE CADASTRO-->
                                            
                                        </div>
                                </div>
                            </div>


                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>