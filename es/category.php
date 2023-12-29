<?php 
$ids = 'humidifiers';
include('head.php');
?>

<!--nav add ============================================= -->
<?php 
include('nav-bar.php');
?>
<!--nav end=============================================-->

<?php
if(isset($_GET['title'])) {
    $slug = mysqli_real_escape_string($mysql, $_GET['title']);
    $select_cats = "SELECT * FROM `cat_page` WHERE `page_name`='$slug' AND `country_code`='all' ";
    $select_catsrun = mysqli_query($mysql, $select_cats);
    if(mysqli_num_rows($select_catsrun) > 0) {
        $datacat = mysqli_fetch_array($select_catsrun); 
        ?>
        
        <!-- Start Breadcrumb ============================================= -->
        <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(<?=base_url( $datacat['img_path'])?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1><?=$datacat['title']?></h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Hogar</a></li>
                            <li class="active"><a href="#"><?=$datacat['title']?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        
    <?php
    }
}

if(isset($_REQUEST['title'])) {
    if(isset($_REQUEST['id'])) {
        if($_REQUEST['id'] == NULL) {
            $pageid = 1;
        } else {
            $pageid = $_REQUEST['id'];
        }
    } else {
        $pageid = 1;
    }
}
?>

<!-- Start Blog ============================================= -->
<div class="blog-area bg-gray full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <?php
                    $slug = mysqli_real_escape_string($mysql, $_GET['title']);
                    $select_cat = "SELECT cat_name,slug FROM `cat` WHERE slug='$slug' LIMIT 1 ";
                    $select_cat_run = mysqli_query($mysql, $select_cat);

                    if (mysqli_num_rows($select_cat_run) > 0) {
                        $select_cat_run_get = mysqli_fetch_array($select_cat_run);
                        $cat_ids = $select_cat_run_get['cat_name'];

                        // Set up pagination
                        $items_per_page = 5;
                        $current_page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
                        $offset = ($current_page - 1) * $items_per_page;

                        $post_get = "SELECT * FROM `post` WHERE cat_name='$cat_ids' AND country='es' LIMIT $offset, $items_per_page";
                        $post_get_run = mysqli_query($mysql, $post_get);

                        if (mysqli_num_rows($post_get_run) > 0) {
                            foreach ($post_get_run as $postdata) {
                                ?>
                                <!-- Single Item -->
                                <div class="single-item item">
                                    <div class="thumb">
                                        <?php
                                        if($postdata['image'] != NULL){  ?>
                                            <a href="<?=site_url('post.php?title='.$postdata['slug']);?>"><img src="<?= base_url('upload/post/'.$postdata['image'])?>" alt="Thumb"></a>
                                        <?php
                                        } else { ?>
                                            <a href="<?=site_url('post.php?title='.$postdata['slug']);?>"><img src="<?= base_url('upload/de/main-post-img.png')?>" alt="Thumb"></a>
                                        <?php
                                        }
                                        ?>
                                        <span class="date"><?= date('d-m-Y', strtotime($postdata['crated_at'])); ?></span>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href=""><?=html_entity_decode($postdata['name']); ?></a>
                                        </h4>
                                        <p>
                                            <?php echo html_entity_decode($postdata['short_dis']); ?>
                                        </p>
                                        <div class="meta">
                                            <a href="<?=site_url('post.php?title='.$postdata['slug']);?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <?php
                            }
                        } else {
                            ?>
                            <!-- Single Item -->
                            <div class="single-item item">
                                <div class="info">
                                    <h4><br><br>
                                    Product was not added .....!
                                    </h4><br>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <?php
                        }
                    } else {
                        ?>
                        <!-- Single Item -->
                        <div class="single-item item">
                            <div class="info">
                                <h4><br><br>
                                This category was not added .....!
                                </h4><br>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <?php
                    }
                    ?>
                    
                    <!-- Pagination -->
                    <?php
                    $slug = mysqli_real_escape_string($mysql, $_GET['title']);
                    $select_count = "SELECT COUNT(*) AS total FROM `post` WHERE cat_name='$cat_ids' AND country='es'";
                    $select_count_run = mysqli_query($mysql, $select_count);
                    $total_posts = mysqli_fetch_assoc($select_count_run)['total'];
                    $total_pages = ceil($total_posts / $items_per_page);

                    if ($total_pages > 1) {
                        ?>
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <?php if ($current_page > 1) { 
                                            
                                            ?>
                                            <li><?php $curr_page=$current_page - 1;?><a href="<?=site_url('category/'.$slug.'/'.$curr_page) ?>">Previous</a></li>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                            <li class="<?= ($i === $current_page) ? 'active' : '' ?>"><a href="<?=site_url('category/'.$slug.'/'.$i); ?>"><?= $i ?></a></li>
                                        <?php } ?>
                                        <?php if ($current_page < $total_pages) { 
                                            $current_pages=$current_page + 1;
                                            ?>
                                            <li><a href="<?=site_url('category/'.$slug .'/'.$current_pages);?>">Next</a></li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- Pagination end -->
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

<!-- Start Footer -->
<?php include 'footer.php'; ?>
<!-- End Footer -->

</body>
</html>
