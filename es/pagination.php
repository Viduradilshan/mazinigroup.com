<?php

$select_maxno = "SELECT MAX(`page_id`) AS page_id FROM `post` WHERE `country`='es' AND `cat_name`='$slug'";
$select_maxno_run = mysqli_query($mysql, $select_maxno);

$maxnos = mysqli_fetch_assoc($select_maxno_run);
if (mysqli_num_rows($select_maxno_run) < 0) {
    $no = 1;
} else {
    $no = $maxnos['page_id'];
}

$current_page = isset($_REQUEST['id']) ? intval($_REQUEST['id']): 1; // Get the current page number from query parameter

$items_per_page = 5; // Number of items per page
$total_pages = ceil($no / $items_per_page); // Calculate total pages

?>

<div class="row">
    <div class="col-md-12 pagi-area">
        <nav aria-label="navigation">
            <ul class="pagination">
                <?php if ($current_page > 1) : ?>
                    <li><a href="category.php?title=<?= $slug ?>&id=<?= $current_page - 1 ?>">Previous</a></li>
                <?php endif; ?>

                <?php
                $start_item = ($current_page - 1) * $items_per_page + 1;
                $end_item = min($start_item + $items_per_page - 1, $no);

                for ($i = $start_item; $i <= $end_item; $i++) :
                ?>
                    <li class="<?= ($i === $current_page) ? 'active' : '' ?>"><a href="category.php?title=<?= $slug ?>&id=<?= $i ?>"><?= $i ?></a></li>
                <?php endfor; ?>

                <?php if ($current_page < $total_pages) : ?>
                    <li><a href="category.php?title=<?= $slug ?>&id=<?= $current_page + 1 ?>">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>
