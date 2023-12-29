<!--head add ============================================= -->
<?php 
$ids='index';
include('head.php');; 

?>


<!--head end ============================================= -->
<?php $path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$url=substr($path,strrpos($path,'/')+1); ?>
<!--nav add ============================================= -->
<?php 

include('nav-bar.php');; 

?>
<!--nav end=============================================-->




    <!-- Start Banner 
        <style>
        .banner-area .box-cell, .banner-area .box-cell div {
	
	background-color: #ECBD00;
} </style>============================================= -->
    
    <div class="banner-area content-double bg-theme-small normal-text">
        <div class="side-bg">
            
            <img src="<?= base_url('assets/img/bg/newbg.png')?>" alt="Thumb" >
        </div>
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-9 text-medium conetnt-lead">
                            <div class="content" data-animation="animated fadeInUpBig">
                              <!--  <div class="content-carousel owl-carousel owl-theme">-->
                                    <div class="item">
                                        <h1> ¡Tu satisfacción es nuestra meta final!</h1>
                                        <p>
                                        Si necesitas cualquier servicio o producto mencionado anteriormente, ¡contáctanos !
                                        </p>
                                        <a class="btn circle btn-theme border btn-md" href="contact.php">Contactar ahora</a>
                                    </div>
                                    
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!--<hr/>-->
    
    <!-- Start Our Features 
    ============================================= -->
    <div class="our-feautes-area less-border default-padding-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <i class="fa fa-handshake-o"></i>
                        <h4>Grupo Mazini</h4>
                        <p style="text-align: justify;">
                        El grupo Mazini es un grupo empresarial muy responsable con sede en Tanzania que te 
                        ofrece diversos tipos de servicios y productos para satisfacer tus necesidades.<br><br>

                        
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        
                        <i class="fa fa-thermometer-quarter"></i>
                        <h4>Lo que hacemos</h4>
                        <p style="text-align: justify;">
                        Principalmente exportamos especias desde Tanzania y Sri Lanka. Además de eso, 
                        ofrecemos soluciones de mapeo de temperatura, humidificadores y deshumidificadores, y productos agrícolas.

                        </p>
                        
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    
                    <div class="item">
                        
                        <i class="fa fa-envira"></i>
                        
                        <h4>Especias que exportamos
                        </h4>
                        <p style="text-align: justify;">
                        Exportamos pimienta negra, cardamomo marrón, núcleos de anacardo (blancos y tostados), clavo, 
                        cilantro, jengibre, cardamomo verde, miel y maní. También exportamos arroz, azúcar y coco.

                        </p>
                        
                    </div>
                </div>
                <!-- End Single Item -->
                 

            </div>
            
        </div>
    </div>
    <!-- End Our Features -->
    

    <!-- Start Our About 
    ============================================= -->
    <div class="about-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="<?= base_url('assets/img/logo-big.png')?>" alt="Thumb">
                </div>
                <div class="col-md-7 info">
                    <h2>¿Qué es el Grupo Mazini?</h2>
                    <p>
                    El Grupo Mazini es un proveedor de servicios y productos muy responsable con sede en la región del este de África. 
                    Principalmente ofrecemos las mejores especias y productos agrícolas de la región. Además de eso, brindamos excelentes 
                    soluciones de mapeo de temperatura para todo tipo de necesidades de nuestros clientes. 
                    ¡La satisfacción de los clientes es nuestro objetivo final!
                    </p>
                    <ul>
                        <li>
                            <i class="fas fa-user"></i>
                            <p>Servicio al cliente amigable</p>
                        </li>
                        <li>
                            <i class="fas fa-check-double"></i>
                            <p>Negocio bien gestionado y procedimental</p>
                        </li>
                        <li>
                            <i class="fas fa-award"></i>
                            <p>Productos y servicios garantizados</p>
                        </li>
                    </ul>
                    <a class="btn btn-theme border btn-md" href="about-us.php">Leer más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start SEO Test 
    ============================================= -->
    <div class="seo-form-area text-center bg-theme-small default-padding" id="incon">
        <!--<div class="side-bg"><img src="assets/img/bg/2.svg" alt="Thumb"></div>-->
        <div class="container" >
            <div class="row">
             <div class="site-heading">
                        <h4>Conéctese con nosotros</h4>
                        <h2>¡Descubre la diferencia del Grupo Mazini !</h2>
                    </div>
                </div>
            </div>
            <!-- msg start-->
           <?php
           if(isset($_SESSION['msg'])){
           if($_SESSION['msg']==true){ ?>

            <div class="forconal">
                <div class="alertofcon">

                Los datos se han enviado correctamente
                    <span class="closebtnfocon" onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
            </div>


            <?php
            $_SESSION['msg']=false;
           }}
           ?>

           <!-- msg end-->
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form action="action/place-order.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Ingrese su nombre..." type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Ingrese su correo electrónico..." type="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" name="msg" placeholder="Ingrese sus comentarios..." type="text" required>
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit" name="incon">
                        Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End SEO Test -->

    <!-- Start Servicese 
    ============================================= -->
    <div class="services-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Nuestro </h4>
                        <h2> Servicios y productos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                              <a href="spices.php" > <i class="fa fa-check-circle-o"></i></a>
                            </div>
                            <div class="info">
                                <h4>Especias</h4>
                                <p>
                                Te traemos las mejores especias de la región del este de África.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <a href="humidifier.php" >  <i class="fa fa-check-circle-o"></i></a>
                            </div>
                            <div class="info">
                                <h4>Humidificadores</h4>
                                <p>
                                El Grupo Mazini te ofrece los mejores humidificadores para brindarte confort.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <a href="dehumidifier.php" >  <i class="fa fa-check-circle-o"></i></a>
                            </div>
                            <div class="info">
                                <h4>Deshumidificadores</h4>
                                <p>
                                El Grupo Mazini te ofrece los mejores deshumidificadores para brindarte confort.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                   <!-- Single Item -->
                   <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <a href="agricultural-item-1.php" >  <i class="fa fa-check-circle-o"></i></a>
                        </div>
                        <div class="info">
                            <h4>Productos agrícolas </h4>
                            <p>
                            Además de las especias, ofrecemos productos agrícolas como cocos, miel, azúcar, frutas, etc.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <a href="temperature-mapping.php"><i class="fa fa-check-circle-o"></i></a>
                        </div>
                        <div class="info">
                            <h4>Mapeo de temperatura</h4>
                            <p>
                            Proporcionamos mapeo de temperatura para todo tipo de almacenes y vehículos, para mantener las condiciones óptimas
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Servicese -->



    <!-- Start Testimonials Area
    ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 intro">
                	<h2>Lo que muchos clientes dicen</h2>
                	<p>
                    Es un gran placer decirte que todos nuestros clientes están muy satisfechos con nuestros servicios y productos. 
                    A lo largo de los años, al tratar con cientos de clientes, hemos identificado las mejores formas de atenderlos.</p>
                	<a href="#" class="btn btn-theme border btn-md">Agrega tu testimonio  </a>
                </div>
                <div class="col-md-6 testimonial-box">
                	<div class="testimonial-items">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000" id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>
                                    Uno de los mejores equipos comerciales con los que he trabajado. Un servicio excelente y muy amigable. </p>
                                    <h4>Mohammad Rizwan</h4>
                                    <span>Cliente </span>
                                </div>
                                <div class="item">
                                    <p>
                                    El equipo del Grupo Mazini es el mejor. Es un placer trabajar con ellos. <br><br> </p>
                                    <h4>Venissa Decker</h4>
                                    <span>Cliente</span>
                                </div>
                                <div class="item">
                                    <p>
                                    Todos los miembros del equipo son muy amigables y puntuales. ¡Buena suerte ! <br><br></p>
                                    <h4>Mark Antony</h4>
                                    <span>Cliente</span>
                                </div>
                                <div class="item">
                                    <p>
                                    Entregaron los productos a tiempo. Definitivamente espero trabajar con ellos en el futuro.
                                                                    <br><br> </p>
                                    <br><h4>Dinuka Karunaratne</h4>
                                    <span>Cliente </span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="<?= base_url('assets/img/800x800.png')?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="<?= base_url('assets/img/800x800.png')?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="<?= base_url('assets/img/800x800.png')?>" alt="Thumb">
                                </li>
                                <!--<li data-target="#testimonial-carousel" data-slide-to="4">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>-->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    

     <!-- add Footer 
    ============================================= -->

  <?php include 'footer.php' ?>

   <!-- end Footer 
    ============================================= -->