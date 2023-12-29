<?php $mysql->close(); ?>
 
 <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding-top bg-light">
        <div class="container">
             <div class="row">
                 <div class="footer-top">
                     <div class="col-md-4 col-sm-4 logo">
                         <a href="#"><img src="<?= base_url('assets/img/logo.png')?>" alt="Logo"></a>
                     </div>
                     
                 </div>
                <div class="f-items">
                     <div class="col-md-4 equal-height item">
                         <div class="f-item">
                             <h4>Nosotros</h4>
                             <p>
                             El Grupo Mazini es un proveedor de servicios y productos muy responsable con sede en la región del este de África.
                              Principalmente ofrecemos las mejores especias y productos agrícolas de la región. Además de eso, brindamos excelentes
                               soluciones de mapeo de temperatura para todo tipo de necesidades de nuestros clientes. 
                             ¡La satisfacción de los clientes es nuestro objetivo final!
                             </p>
                             <div class="social">
                                 <ul>
                                     <li><a href="https://www.facebook.com/mazinigroup
                                        "  target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="https://www.twitter.com/mazinigroup
                                        " target="_blank"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="https://www.pinterest.com/mazinigroup/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                     <li><a href="https://www.instagram.com/mazinigroup
                                        " target="_blank"><i class="fab fa-instagram"></i></a></li>
                                     <li><a href="https://www.linkedin.com/in/mazini-group-037175246/" target="_blank"><i class=" fab fa-linkedin-in"></i></a></li>
                                    
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 equal-height item">
                         <div class="f-item link">
                             <h4>Products</h4>
                             <ul>
                                 <li>
                                     <a href="<?= site_url('spices')?>">Especias</a>
                                 </li>
                                 <li>
                                     <a href="<?= site_url('humidifier')?>">Humidificador</a>
                                 </li>
                                 <li>
                                     <a href="<?= site_url('dehumidifier')?>">Deshumidificador</a>
                                 </li>
                                 <li>
                                     <a href="<?= site_url('agricultural-items-1')?>">Productos agrícolas</a>
                                 </li>
                                 
                             </ul><br>
                             <h4>Servicio</h4>
                             <ul>
                                 <li>
                                     <a href="<?= site_url('temperature-mapping.php')?>">Mapeo de temperatura</a>
                                 </li>
                                 
                                 
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-4 equal-height item">
                         <div class="f-item address">
                             <h4>Información de contacto</h4>
                             <p>
                             Cualquier consulta, por favor contáctenos.
 
                             </p>
                             <div class="address">
                                 <ul>
                                     <li>
                                         <h5><i class="fas fa-home"></i> Website:</h5>
                                         <span>www.mazinigroup.com</span>
                                     </li>
                                     <li>
                                         <h5><i class="fas fa-envelope"></i> Email:</h5>
                                         <span> Sales@mazinigroup.com</span>
                                     </li>
                                     <li>
                                         <h5><i class="fas fa-phone"></i> Phone:</h5>
                                         <span> 00255759882931</span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Start Footer Bottom -->
         <div class="footer-bottom bg-theme-small">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6">
                         <p>&copy; Copyright 2022. All Rights Reserved by <a href="<?= site_url('')?>">Mazini Group</a></p>
                     </div>
                    
                 </div>
             </div>
         </div>
         <!-- End Footer Bottom -->
     </footer>
     <!-- End Footer -->
    
 
 </body>
 <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("full-nav").style.top = "0";
      } else {
        document.getElementById("full-nav").style.top="-170px";
      }
      prevScrollpos = currentScrollPos;
    }
    </script>

<!-- jQuery Frameworks
============================================= -->
<script src="<?= base_url('assets/js/jquery-1.12.4.min.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/js/equal-height.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.appear.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?= base_url('assets/js/modernizr.custom.13711.js')?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?= base_url('assets/js/wow.min.js')?>"></script>
<script src="<?= base_url('assets/js/progress-bar.min.js')?>"></script>
<script src="<?= base_url('assets/js/isotope.pkgd.min.js')?>"></script>
<script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js')?>"></script>
<script src="<?= base_url('assets/js/count-to.js')?>"></script>
<script src="<?= base_url('assets/js/bootsnav.js')?>"></script>
<script src="<?= base_url('assets/js/Chart.min.js')?>"></script>
<script src="<?= base_url('assets/js/custom-chart.js')?>"></script>
<script src="<?= base_url('assets/js/main.js')?>"></script>
 </html>