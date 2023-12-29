<?php 
$type='post';
$ids='ginger';
include('head.php');

?>

<!--nav add ============================================= -->
<?php 

include('nav-bar.php');; 

?>
<!--nav end=============================================-->

    <?php 
    if(isset($_GET['title'])){
        $slug=mysqli_real_escape_string($mysql,$_GET['title']);
        $select_postcat="SELECT `cat_name`,`name`  FROM `post` WHERE slug='$slug'";
        $post_postcat_run= mysqli_query($mysql,$select_postcat);
        if (mysqli_num_rows($post_postcat_run)>0) {
            $data = $post_postcat_run -> fetch_assoc();
            $catname=$data['cat_name'];
            $select_catdata="SELECT * FROM `cat_page` WHERE `page_name`='$catname'"; 
            $select_catdata_run=mysqli_query($mysql,$select_catdata);
            $datas = $select_catdata_run -> fetch_assoc();
            $img_pa=$datas['img_path'];
             ?>

 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url('<?= base_url($img_pa)?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?=$data['name']?> </h1>
                    <ul class="breadcrumb">
                        <li><a href="<?=site_url('index.php')?>"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#"><?=$datas['page_name'];?></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

           
                      <?php      }

        
    

    }else{
        header('404.php');
    }
    
    
    ?>

   

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area bg-gray single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <div class="item">

                         <?php 
                         if(isset($_GET['title'])) {
                            $slug=mysqli_real_escape_string($mysql,$_GET['title']);
                            $select_post="SELECT * FROM `post` WHERE  slug='$slug'";
                            $post_post_run= mysqli_query($mysql,$select_post);

                            if (mysqli_num_rows($post_post_run)>0) {

                                foreach ($post_post_run as $postdata) { ?>
                                           <!-- Start Post Thumb -->
                                        <div class="thumb">
                                            <?php if($postdata['image']!= NULL){   ?>
                                                             <img src="<?= base_url('upload/post/'.$postdata['image'])?>" alt="Thumb">
                                                           <?php
                                                        }else{?>
                                                           <img src="<?= base_url('upload/de/main-post-img.png')?>" alt="Thumb">  
                                                            
                                                            
                                                            
                                                       <?php }?>
                                                        
                                            <span class="date"><?= date('d-m-Y',strtotime($postdata['crated_at'] )); ?></span>
                                        </div>
                                        <!-- Start Post Thumb -->

                                        <div class="content-box">
                                            <h3></h3>
                                            
                                                <p><?php echo html_entity_decode($postdata['description']);    ?> </p>
                                                
                                            <blockquote>
                                                <p>
                                                No dudes en ponerte en contacto con el Grupo Mazini para cualquier requisito de cotización.                                    </p> 
                                            </blockquote><br>
                                            <p style="align-items:center ;"><a class="btn btn-theme border btn-md" href="contact.php">Comprar ahora</a></p>


                                            <!-- Start Post Pagination 
                                            <div class="post-pagi-area">
                                                <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                                <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                                            </div>-->
                                            <!-- End Post Pagination -->


                                      
                                    

                               <?php }
                            
                            }
                            
                            }
                                    
                         ?>


                            
                                

                               

                                
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            
                             <?php include ('catsidebar.php');?>
                           
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
                                <div class="sidebar-info">
                                                                             <ul>
                                             <li class="facebook">
                                            <a href="https://www.facebook.com/mazinigroup"  target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href=https://www.twitter.com/mazinigroup"  target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="https://www.pinterest.com/mazinigroup/"  target="_blank">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                       
                                        <li class="linkedin">
                                            <a href="https://www.linkedin.com/in/mazini-group-037175246/"target="_blank"">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/mazinigroup
                                        "target="_blank">
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