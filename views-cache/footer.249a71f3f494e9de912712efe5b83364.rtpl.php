<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="/res/site/img/logo-footer.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Feito Por studio 7ONLINE<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://instagram.com/7on.line" target="_blank">7online</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Renascença: </span>(98) 3227-1351</a>
                <a href="#"><span>Cohama: </span>(98) 3236-0782</a>
                <a href="#"><span>Cohab: </span>(98) 3225-0538</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Siga-nos</span>
                <a href="https://www.facebook.com/curso.evolucao"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://instagram.com/curso_evolucao"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    

        <script src="/res/site/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script src="/res/site/node_modules/plugins/active.js"></script>
        <script src="/res/site/js/js-temp/jquery.easing.1.3.js"></script>
      <script src="/res/site/js/js-temp/jquery.waypoints.min.js"></script>
      <script src="/res/site/js/js-temp/jquery.stellar.min.js"></script>
      <script src="/res/site/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
      <script src="/res/site/js/js-temp/jquery.magnific-popup.min.js"></script>
      <script src="/res/site/js/js-temp/aos.js"></script>
      <script src="/res/site/js/js-temp/jquery.animateNumber.min.js"></script>
      <script src="/res/site/js/js-temp/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="/res/site/js/js-temp/google-map.js"></script>
      <script src="/res/site/js/js-temp/main.js"></script>
        
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel();
            });
        </script>

        <script type="text/javascript">
              function ajax(){
                var req = new XMLHttpRequest();
                req.onreadystatechange = function(){
                  if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;
                  }
                }

                req.open('GET', 'vendor/cursoevolucao/php-classes/src/chat/chat.php', true);
                req.send();
              }

              setInterval(function(){ajax();}, 1000);
        </script>

        
</body>
</html>