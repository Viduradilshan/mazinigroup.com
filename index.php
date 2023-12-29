<!--head add ============================================= -->
<?php 
$type='mpage';
$pname='home';
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
            
            <img src="<?=base_url('assets/img/bg/newbg.png')?>" alt="Thumb" >
        </div>
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-9 text-medium conetnt-lead">
                            <div class="content" data-animation="animated fadeInUpBig">
                              <!--  <div class="content-carousel owl-carousel owl-theme">-->
                                    <div class="item">
                                        <h1> Your Satisfaction Is Our Ultimate Goal !</h1>
                                        <p>
                                            If you are in need of any service / products <br> we mentioned above ,  just contact us !
                                        </p>
                                        <a class="btn circle btn-theme border btn-md" href="contact.php">Contact Now</a>
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
                        <h4>Mazini group</h4>
                        <p style="text-align: justify;">
                            Mazini group is a very responsible business group based in Tanzania which provides you 
                         various kinds of services and products to fulfil your needs.<br><br>

                        
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        
                        <i class="fa fa-thermometer-quarter"></i>
                        <h4>What we do</h4>
                        <p style="text-align: justify;">
                            We mainly export spices from Tanzania and Sri Lanka. Other than that, 
                            we provide temperature mapping solutions, humidifiers & dehumidifiers and Agricultural products.

                        </p>
                        
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    
                    <div class="item">
                        
                        <i class="fa fa-envira"></i>
                        
                        <h4>Spices We Export.
                        </h4>
                        <p style="text-align: justify;">
                            We export black pepper, brown cardamom, cashew kernels (white & roasted), clove, 
                            coriander, ginger, green cardamom, honey, and peanuts. We also export rice, sugar and coconut too.

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
                    <h2>What is Mazini Group</h2>
                    <p>
                    Mazini group is a very responsible service and products provider based on east-African region. We mainly provide the best 
                  spices and agricultural products in the region. Other than that, we provide excellent temperature mapping solutions for 
                    all kinds of needs of our clients. Customers' satisfaction is our ultimate goal!
                    </p>
                    <ul>
                        <li>
                            <i class="fas fa-user"></i>
                            <p>Friendly customer service</p>
                        </li>
                        <li>
                            <i class="fas fa-check-double"></i>
                            <p>Well managed and procedural business</p>
                        </li>
                        <li>
                            <i class="fas fa-award"></i>
                            <p>Guaranteed products & services</p>
                        </li>
                    </ul>
                    <a class="btn btn-theme border btn-md" href="about-us.php">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start SEO Test 
    ============================================= -->
    <div class="seo-form-area text-center bg-theme-small default-padding">
        <!--<div class="side-bg"><img src="assets/img/bg/2.svg" alt="Thumb"></div>-->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading">
                        <h4>Connect with us</h4>
                        <h2>Discover the Mazini group Difference!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Name ..." type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Email ..." type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Comments ..." type="text">
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit">
                            Submit
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
                        <h4>Our </h4>
                        <h2> Services and Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                              <a href="<?=site_url('category/spices');?>" > <i class="fa fa-check-circle-o"></i></a>
                            </div>
                            <div class="info">
                                <h4>Spices</h4>
                                <p>
                                We bring you the best spices from east-African region.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <a href="<?=site_url('humidifier');?>" >  <i class="fa fa-check-circle-o"></i></a>
                            </div>
                            <div class="info">
                                <h4>Humidifiers</h4>
                                <p>
                                mazini group provides you the best humidifiers to bring you the comfort.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <a href="<?=site_url('dehumidifier');?>" >  <i class="fa fa-check-circle-o"></i></a>
                            </div>
                            <div class="info">
                                <h4>Deumidifiers</h4>
                                <p>
                                mazini group provides you the best dehumidifiers to bring you the comfort.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                   <!-- Single Item -->
                   <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <a href="<?=site_url('category/agricultural-products');?>" >  <i class="fa fa-check-circle-o"></i></a>
                        </div>
                        <div class="info">
                            <h4>Agricultural Products </h4>
                            <p>
                            Other than the spices, we provide agricultural products like coconuts, honey, sugar, fruits etc
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <a href="<?=site_url(temperature-mapping.php);?>"><i class="fa fa-check-circle-o"></i></a>
                        </div>
                        <div class="info">
                            <h4>Temperature Mapping</h4>
                            <p>
                            we provide temperature mapping for all kinds of warehouses, vehicles to keep in their optimal conditions
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
                	<h2>What many clients say</h2>
                	<p>
                    It is our greatest pleasure to tell you that all of our customers are highly satisfied with our services and products. 
                    Through years of dealing with hundreds of customers, we have identified the best ways to deal with them .</p>
                	<a href="#" class="btn btn-theme border btn-md">Add Your Testimonial  </a>
                </div>
                <div class="col-md-6 testimonial-box">
                	<div class="testimonial-items">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000" id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>
                                    One of the best business team I have ever worked with. Great and very friendly service </p>
                                    <h4>Mohammad Rizwan</h4>
                                    <span>Customer </span>
                                </div>
                                <div class="item">
                                    <p>
                                    Mazini Group team is the best. Very nice to work with  <br><br> </p>
                                    <h4>Venissa Decker</h4>
                                    <span>Customer</span>
                                </div>
                                <div class="item">
                                    <p>
                                    All of the team members are very friendly and punctual. Good luck <br><br></p>
                                    <h4>Mark Antony</h4>
                                    <span>Customer</span>
                                </div>
                                <div class="item">
                                    <p>
                                    Delivered the products within the time. Definitely looking forward to work with them 
                                                                    <br><br> </p>
                                    <br><h4>Dinuka Karunaratne</h4>
                                    <span>Customer </span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="<?= base_url('assets/img/800x800.png');?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="<?= base_url('assets/img/800x800.png');?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="<?= base_url('assets/img/800x800.png');?>" alt="Thumb">
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