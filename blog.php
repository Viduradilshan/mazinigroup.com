<?php 
$ids='spices';
include('head.php');

?>

<body>

    <!-- Preloader Start -->
    
    <!-- Preloader Ends -->
<!--nav add ============================================= -->
<?php 

include('nav-bar.php');; 

?>
<!--nav end=============================================-->
    <!-- End Header -->
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/blog.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                       
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area bg-gray full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <!-- Single Item -->
                        <div class="single-item item">
                            <div class="thumb">
                                <a href="<?= base_url('5-fun-facts-about-peanuts')?>"><img src="<?=base_url("assets/img/5-fun-facts-about-peanuts.png");?>" alt="Thumb"></a>
                                
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="<?= base_url('h5-fun-facts-about-peanuts')?>">5 Fun facts about Peanuts  
                                    </a>
                                </h4>
                                <p>
                                    Peanuts are a type of legume that is popular around the world as a snack food and a source of protein.....                               
                                    <div class="meta">
                                    
                                    <a href="<?= site_url('5-fun-facts-about-peanuts')?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                         <!-- Single Item -->
                        <div class="single-item item">
                            <div class="thumb">
                                <a href="tanzania-green-cardamom"><img src="<?=base_url("assets/img/humidifiers-help-you-to-stay-healthy.png");?>" alt="Thumb"></a>
                                
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="tanzania-green-cardamom">How humidifiers help you to stay healthy  
                                    </a>
                                </h4>
                                <p>
                                    Humidifiers are basically devices which add moisture to the air
                                    we breathe.                                
                                    <div class="meta">
                                    
                                    <a href="<?= base_url('how-humidifiers-help-you-to-stay-healthy')?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item 
                        <div class="single-item item">
                            <div class="thumb">
                                <a href="cumin"><img src="assets/img/cumin.png" alt="Thumb"></a>
                                
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="cumin">Cumin
                                    </a>
                                </h4>
                                <p>
                                    Mazini Group provides high-quality Tanzania cumin to the local and export markets. We get raw fresh Tanzania cumin from family growers 
                                    in Tanzania. Tanzania cumin (Cuminum cyminum) is
                                     a nutrient herb that prefers dry areas. On average, the plant looks at a height of at least 0.3 meters.                                </p>
                                <div class="meta">
                                   
                                    <a href="cumin">Read More</a>
                                </div>
                            </div>
                        </div>-->
                        <!-- End Single Item -->
                        



                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <!--<li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>-->
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Products & Services</h4>
                                </div>
                                <div class="sidebar-info">                 

                                   <ul>
                                        <li>
                                            <a href="<?= base_url('spices')?>">Spices <span>6</span></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('humidifier')?>">Humidifiers <span>1</span></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('dehumidifier')?>">Dehumidifiers<span>3</span></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('agricultural-items-1')?>">Agricultural products <span>8</span></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            
                            <!--<div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->

                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">                 <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/mazinigroup"  target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://www.twitter.com/mazinigroup"  target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="https://www.pinterest.com/mazinigroup/"  target="_blank">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                       
                                        <li class="linkedin">
                                            <a href="https://www.linkedin.com/in/mazini-group-037175246/"target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/mazinigroup"  target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

     <!-- Start Footer 
    ============================================= -->
       <!-- add Footer 
    ============================================= -->

  <?php include 'footer.php' ?>

   <!-- end Footer 
    ============================================= -->