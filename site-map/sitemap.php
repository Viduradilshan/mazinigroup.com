<?php 
//sitemap.php to sitemap.xml using .htaccess file 
require_once('../dt_con.php');
$get_data = "SELECT `id`, `slug`, `country` FROM `post`";
$get_datarun = mysqli_query($mysql, $get_data);

// Define your base URLs
$all_url = "https://mazinigroup.com/";
$es_site = "https://mazinigroup.com/es";

header("Content-Type: application/xml; charset=utf-8");

echo '<!--?xml version="1.0" encoding="UTF-8"?-->'.PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemalocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
echo '<url>' . PHP_EOL;
echo '<loc>'.$base_url.'</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;

foreach($get_datarun as $row) {
    echo '<url>' . PHP_EOL;
        if ($row['country'] == 'all') {
            echo '<loc>'.$all_url. $row["slug"] .'</loc>' . PHP_EOL;
        } elseif ($row['country'] == 'es') {
            echo '<loc>'.$es_site. $row["slug"] .'</loc>' . PHP_EOL;
        }

    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;

// Close database connection
mysqli_close($mysql);
?>
