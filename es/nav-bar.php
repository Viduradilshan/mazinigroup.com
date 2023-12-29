<body>

    

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="social text-left col-md-4">
                    <ul>
                        <li><a href="https://www.facebook.com/mazinigroup"  target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/mazinigroup"  target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.twitter.com/mazinigroup"  target="_blank"><i class="fab fa-twitter"></i></a></li>
                                           
                        <li><a href="https://www.linkedin.com/in/mazini-group-037175246/"target="_blank"><i class="fab fa-linkedin-in" ></i></a></li>
                        <li><a href="https://www.pinterest.com/mazinigroup/"  target="_blank"><i class="fab fa-pinterest" ></i></a></li>
                    </ul>
                </div>
                <div class="col-md-8 address-info text-right">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i> Dar es Salaam, Tanzania
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> Sales@mazinigroup.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> 00255759882931
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav" id="full-nav">

           

            <div class="container">

                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= site_url('')?>">
                        <img src="<?= base_url('assets/img/logo.png')?>" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a href="<?= site_url('')?>">Inicio</a>
                        </li>
                        <li>
                            <a href="<?= site_url('about-us')?>">Nosotros</a>
                        </li>

                        
                        <li class="dropdown" >
                            <a  class="dropdown-toggle active" data-toggle="dropdown"  >Productos</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= site_url('category.php?title=spices')?>">Especias</a></li>
                                <li><a href="<?= site_url('category.php?title=humidifiers')?>">Humidificador</a></li>
                                <li><a href="<?= site_url('category.php?title=dehumidifiers')?>">Deshumidificador</a></li>
                                <li><a href="<?= site_url('category.php?title=agricultural-products')?>">Productos agrícolas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a  class="dropdown-toggle active" data-toggle="dropdown" >Servicio</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= site_url('temperature-mapping')?>">Mapeo de temperatura</a></li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="<?= site_url('blog')?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?= site_url('news')?>">Noticias</a>
                        </li>
                        <li>
                            <a href="<?= site_url('contact-us')?>">Contáctenos</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

          

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->