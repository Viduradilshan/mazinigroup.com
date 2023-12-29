
<?php
if ($type='mpage') {
    if($pname='home'){
        $dis='Discover the finest selection of spices and agricultural products at Mazini Group. Our responsibly sourced Black Pepper,
         Cardamom, Cloves, Rice, Coconut, and more, ensure customer satisfaction both locally and overseas.
          Imported from Tanzania and Sri Lanka, our high-quality 
        products promise to elevate your culinary experiences. Explore our diverse range today';
        $title='Spices | Humidifier| Dehumidifier | Temperature Mapping | Exquisite Spices and Premium Agricultural Products | Mazini Group';
        $key='Spices, Black Pepper, Cardamom, Cloves, Cumin, Coriander, Ginger, Nuts, Cashew, Peanut, Honey, Coconuts,
         Sugar, Rice, Agricultural Products, Tanzania, Sri Lanka,
         Mazini Group, Quality, Responsible, Customer Satisfaction, Export, Local Use';

    }elseif($pname='category'){
        $dis='Descubre nuestra amplia selección de especias exquisitas, humidificadores, deshumidificadores y servicios de mapeo de temperatura en Mazini Group. Encuentra productos de calidad premium que elevarán tu experiencia culinaria y mejorarán tu entorno interior. Confía en nuestra variedad y calidad para satisfacer tus necesidades y preferencias. ¡Explora nuestras ofertas ahora';
       $title='Categorías | Especias, Humidificadores, Deshumidificadores y Mapeo de Temperatura | Grupo Mazini';
       $key='Especias, Humidificador, Deshumidificador, Mapeo de Temperatura, Grupo Mazini, Productos Agrícolas, Calidad Premium, Experiencia Culinaria, Entorno Interior, Ofertas.';

    }elseif($pname='blog'){

    }elseif($pname='dehumidifier'){

       $dis='Crea un ambiente cómodo y libre de humedad con nuestros deshumidificadores de alto rendimiento. La página de deshumidificadores ofrece una amplia selección de unidades de alta calidad diseñadas para eliminar el exceso de humedad, prevenir el moho y el mildiu, y mejorar la calidad del aire en tu espacio. Descubre el deshumidificador perfecto que se adapte a tus necesidades y disfruta de un entorno de vida más saludable. Di adiós a la humedad y dale la bienvenida al confort';
       $title='Desumidificadores Premium para un Ambiente de Vida más Saludable - Grupo Mazini';
       $key='Deshumidificadores, Control de Humedad, Prevención de Moho, Mejora de la Calidad del Aire, Vida Confortable, Entorno más Saludable, Reducción de Humedad, Unidades de Deshumidificación Premium, Deshumidificadores de Alto Rendimiento, Tanzania, Sri Lanka, Grupo Mazini, Productos de Calidad, Abastecimiento Responsable';
    }
    elseif($pname='humidifier'){

        $key= 'Humidificadores de Alta Calidad para una Mayor Comodidad Interior - Grupo Mazini';
        $dis='Descubre los humidificadores de primera clase en el Grupo Mazini para mejorar la calidad del aire interior y la comodidad. Nuestra selección premium incluye unidades de humidificador de vanguardia diseñadas para mantener niveles óptimos de humedad, combatir el aire seco y promover un entorno de vida más saludable. Experimenta los beneficios de una humedad equilibrada con nuestros humidificadores confiables y de abastecimiento responsable.';
        $title='Humidificadores, Calidad del Aire Interior, Comodidad, Niveles Óptimos de Humedad, Aire Seco, Vida más Saludable, Unidades de Humidificación Premium, Abastecimiento Responsable, Grupo Mazini, Tanzania, Sri Lanka';

    }elseif($pname='news'){
        $key= 'Noticias de Grupo Mazini | Mantente Informado sobre Nuestros Productos y Progresos | Especias | Humidificadores | Deshumidificadores | Mapeo de Temperatura';
        $dis='Mantente actualizado con las últimas novedades y emocionantes desarrollos en Grupo Mazini a través de nuestra completa página de noticias. Explora artículos y anuncios informativos sobre nuestras especias premium, productos agrícolas y otras ofertas. Infórmate sobre nuestro abastecimiento responsable, satisfacción del cliente y logros de la empresa. Únete a nosotros en este emocionante viaje de crecimiento y excelencia.';
        $title='Grupo Mazini, Noticias, Actualizaciones, Anuncios, Especias, Productos Agrícolas, Abastecimiento Responsable, Satisfacción del Cliente, Crecimiento, Excelencia';

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