
<?php
if ($type='mpage') {
    if($pname='home'){
        $dis='Bienvenido a Mazini Group, tu destino único para las mejores especias, productos agrícolas y más';
        $title='Especias | Humidificador | Deshumidificador | Mapeo de Temperatura | Exquisitas Especias y Productos Agrícolas de Calidad Premium | Grupo Mazini | Mazini Group';
        $key='Especias, Productos Agrícolas, Mazini Group, Calidad, Exportación, Satisfacción del Cliente, Especias de Tanzania, Especias de Sri Lanka';

    }elseif($pname='category'){
        $dis='Celebrate culinary excellence with our exquisite collection of spices and premium agricultural products at Mazini Groups category page. Explore a wide range of Black Pepper, Cardamom, Cloves, Cumin, Ginger, and more, sourced responsibly from Tanzania and Sri Lanka. Elevate your dishes with our finest selection and experience true taste sensations. Satisfaction guaranteed both locally and overseas';
       $title='Spices | Humidifier| Dehumidifier | Temperature Mapping | "Explore Exquisite Spices and Premium Agricultural Products | Mazini Group';
       $key='Spices, Agricultural Products, Black Pepper, Cardamom, Cloves, Cumin, Ginger, Tanzania, Sri Lanka, Mazini Group, Exquisite Collection, Premium Quality, Culinary Excellence, 
       Responsible Sourcing, Taste Sensations, Local and Overseas Satisfactio';

    }elseif($pname='blog'){

    }elseif($pname='dehumidifier'){

       $dis='Create a comfortable and moisture-free environment with our high-performance dehumidifiers. The dehumidifier page offers a wide selection of top-quality units designed to eliminate excess humidity, prevent mold and mildew, and improve air quality in your space. Discover the perfect dehumidifier to suit your needs and enjoy a healthier living environment. Say goodbye to dampness and hello to comfort!';
       $title='Premium Dehumidifiers for a Healthier Living Environment - Mazini Group';
       $key='Dehumidifiers, Moisture Control, Mold Prevention, Air Quality Improvement, Comfortable Living, Healthier Environment, Dampness Reduction, Premium Dehumidifier Units, High-Performance Dehumidifiers, Tanzania, Sri Lanka, Mazini Group, Quality Products, Responsible Sourcing';
    }elseif($pname='humidifier'){
        $key= 'Humidifiers, Indoor Air Quality, Comfort, Optimal Humidity Levels, Dry Air, Healthier Living, Premium Humidifier Units, Responsible Sourcing, Mazini Group, Tanzania, Sri Lanka.';
        $dis='Discover top-notch humidifiers at Mazini Group to enhance indoor air quality and comfort. Our premium selection includes cutting-edge humidifier units designed to maintain optimal humidity levels, combat dry air, and promote a healthier living environment. Experience the benefits of balanced humidity with our reliable and responsibly sourced humidifiers. ';
        $title='High-Quality Humidifiers for Improved Indoor Comfort | Mazini Group| Spices | Humidifier| Dehumidifier | Temperature Mapping ';

    }elseif($pname='news'){
        $key= 'Mazini Group, News, Updates, Announcements, Spices, Agricultural Products, Responsible Sourcing, Customer Satisfaction, Growth, Excellence';
        $dis='Stay updated with the latest happenings and exciting developments at Mazini Group through our comprehensive news page. Explore insightful articles and announcements about our premium spices, agricultural products, and other offerings. Be informed about our responsible sourcing, customer satisfaction, and company achievements. Join us on this exciting journey of growth and excellence.';
        $title='Mazini Group News | Stay Informed about Our Products and Progress | Spices | Humidifier| Dehumidifier | Temperature Mapping ';

    }
    
    
}else if($type='post'){
    if(isset($_GET['title'])) {
        $slug=mysqli_real_escape_string($mysql,$_GET['title']);
        $sql = "SELECT * FROM `post` WHERE slug='$slug' AND `country`='all'";
        $result = $mysql->query($sql);
        $row = $result->fetch_assoc();
        $rowcount=mysqli_num_rows($result);
    if ($rowcount > 0) {
        $key= $row['key_word'];
        $dis=$row['meta_discription'];
        $title=$row['meta_title'];
    }
    else {
    $key= 'Mazini Group, Spices, Agricultural Products, Exports, Quality, Tanzania, Sri Lanka, Responsible Sourcing, Customer Satisfaction, Premium, Dehumidifiers, Humidifiers, Temperature Mapping, News, Updates, Growth, Excellence';
    $dis='Mazini Group  | Spices | Humidifier| Dehumidifier | Temperature Mapping ';
    $title='Mazini Group | Spices | Humidifier| Dehumidifier | Temperature Mapping ';
    }
}
}






?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $dis ?>">
    <meta name="keywords" content="<?php echo $key ?>">

    <!-- ========== Page Title ========== -->
    <title><?php echo $title ?> </title>