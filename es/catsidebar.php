<?php
require_once('dt_con.php');

$cat_name_query = "SELECT * FROM `cat` WHERE `status`=0";
$cat_name_run = mysqli_query($mysql, $cat_name_query);
$num_rows = mysqli_num_rows($cat_name_run);

if ($num_rows > 0) {
    ?>
    <br>
    <div class="sidebar-item category">
        <div class="title">
            <h4>Productos y servicios</h4>
        </div>
        <div class="sidebar-info">
            <ul>
                <?php
                foreach ($cat_name_run as $row) {
                    $cat_name = $row['cat_name'];
                    $category_name = $row['cs'];

                    $get_post_query = "SELECT `id` FROM `post` WHERE `cat_name`='$cat_name' AND `country`='es'";
                    $get_post_num = mysqli_query($mysql, $get_post_query);
                    $num_posts = mysqli_num_rows($get_post_num);
                ?>
                    <li>
                        <a href="<?= site_url('category.php?title=' . $row['slug']) ?>"><?= ucfirst($category_name); ?> <span><?= $num_posts ?></span></a>
                    </li>
                <?php
                }
                ?>
                <li>
                    <a href="<?= site_url('temperature-mapping.php') ?>"> Temperature mapping <span>1</span></a>
                </li>
            </ul>
        </div>
    </div>
<?php
}
?>
