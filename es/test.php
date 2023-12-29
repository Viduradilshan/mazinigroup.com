-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 12:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `mazini`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `short_dis` text NOT NULL,
  `slug` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_discription` mediumtext DEFAULT NULL,
  `key_word` mediumtext DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `page_id` int(15) DEFAULT NULL,
  `crated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `cat_name`, `name`, `description`, `short_dis`, `slug`, `image`, `meta_title`, `meta_discription`, `key_word`, `country`, `status`, `page_id`, `crated_at`) VALUES
(76, 'humidifiers', 'Humidificadores', '&lt;h6 align=&quot;justify&quot;&gt;Un humidificador es un aparato que aumenta la humedad en una habitaci&oacute;n individual o en un edificio completo. Los humidificadores de punto de uso se utilizan para humidificar una habitaci&oacute;n espec&iacute;fica en el hogar, mientras que los humidificadores para toda la casa o de horno, que se conectan al sistema de calefacci&oacute;n, ventilaci&oacute;n y aire acondicionado (HVAC) del hogar, distribuyen humedad a toda la casa. Los humidificadores se incluyen com&uacute;nmente en ventiladores m&eacute;dicos para mejorar la comodidad del paciente. Los humidificadores grandes se utilizan con frecuencia como parte de un sistema HVAC m&aacute;s grande en entornos comerciales, institucionales o industriales.&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;h5 align=&quot;justify&quot;&gt;&lt;b&gt;● Diferentes Tipos de Humidificadores&lt;/b&gt;&lt;/h5&gt;&lt;h5 align=&quot;justify&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/h5&gt;&lt;p align=&quot;justify&quot;&gt;El tipo de humidificador que elijas depende de tus preferencias, presupuesto y el tama&ntilde;o del espacio que desees humidificar. Los humidificadores se clasifican en cinco categor&iacute;as:&lt;br&gt;&lt;br&gt;1. Humidificadores centrales&lt;br&gt;2. Humidificadores con impulsores&lt;br&gt;3. Evaporadores&lt;br&gt;4. Humidificadores ultras&oacute;nicos&lt;br&gt;5. Vaporizadores de vapor&lt;br&gt;&lt;br&gt;&lt;b&gt;Los Humidificadores Suelen Dividirse en Dos Categor&iacute;as: Consola y Port&aacute;til/Personal.&lt;/b&gt;&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;1. Humidificadores Centrales&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;Los humidificadores para el sistema de calefacci&oacute;n o aire acondicionado de tu hogar est&aacute;n incorporados directamente. Estos son los humidificadores m&aacute;s costosos, pero son la mejor opci&oacute;n para agregar humedad a toda tu casa. El vapor que liberan los humidificadores tradicionales podr&iacute;a causar quemaduras. Los humidificadores centrales no producen vapor. Cuando el aire se vuelve demasiado seco, el humidificador central agrega la cantidad necesaria de vapor de agua al aire que fluye a trav&eacute;s del sistema HVAC. El calor del horno evapora el agua, generando vapor de agua para que el humidificador central distribuya.&lt;/p&gt;&lt;p align=&quot;justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;2. Humidificadores con Impulsores&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;Los humidificadores con impulsores utilizan discos de giro de alta velocidad para producir humedad. Estos modelos suelen tener un precio m&aacute;s bajo. Tambi&eacute;n son de los dispositivos m&aacute;s adecuados para los ni&ntilde;os, ya que emiten una niebla fresca que no causa quemaduras. Para evitar que las bacterias o minerales se mezclen con el aire y se inhalen, limpia el humidificador con regularidad, reemplaza los filtros y usa agua desmineralizada.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;3. Evaporadores&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;Un filtro humedecido se sopla a trav&eacute;s de un evaporador. Un sistema de unidad &uacute;nica utiliza ventiladores para alimentar el dispositivo y eliminar la humedad del aire. Debido a que no se utiliza calor, es adecuado para su uso alrededor de beb&eacute;s y ni&ntilde;os peque&ntilde;os. Aunque son menos costosos que los humidificadores centrales, solo se pueden usar en una habitaci&oacute;n a la vez. Estos tambi&eacute;n pueden liberar un exceso de humedad en el ambiente.&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;4. Humidificadores Ultras&oacute;nicos&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;Hacen un excelente trabajo al humidificar el aire. De hecho, pueden agregar mucha m&aacute;s humedad al aire, pero esta ventaja puede convertirse en una desventaja, ya que generalmente resulta en un ambiente con exceso de humedad que produce moho y humedad. Por eso, un humidificador ultras&oacute;nico debe incluir un humidostato que pueda monitorear los niveles de humedad y apagar el humidificador cuando el aire est&eacute; suficientemente h&uacute;medo. Algunas unidades deben limpiarse regularmente para evitar el crecimiento de bacterias y moho, mientras que otras usan un filtro cer&aacute;mico estable que nunca necesita ser reemplazado.&lt;br&gt;&lt;br&gt;5. Vaporizadores de Vapor&lt;br&gt;Los vaporizadores de vapor funcionan con corriente el&eacute;ctrica. Calientan y enfr&iacute;an el agua antes de liberarla al aire. Simplemente agrega agua a este dispositivo, y este calentar&aacute; y enfriar&aacute; adecuadamente el agua para permitir la inhalaci&oacute;n conveniente del vapor. Son los humidificadores m&aacute;s asequibles y m&oacute;viles disponibles. Se pueden encontrar en farmacias.&lt;br&gt;&lt;br&gt;Cuando se necesita mantener un nivel de humedad preciso para evitar la generaci&oacute;n de electricidad est&aacute;tica, conservar las caracter&iacute;sticas del material y crear una condici&oacute;n c&oacute;moda y saludable para los trabajadores o habitantes, se utilizan humidificadores industriales.&lt;br&gt;&lt;/p&gt;&lt;h4 align=&quot;justify&quot;&gt;&lt;br&gt;&lt;/h4&gt;&lt;p align=&quot;justify&quot;&gt;&lt;/p&gt;&lt;h4 align=&quot;justify&quot;&gt;● Ventajas de Tener un Humidificador&lt;/h4&gt;&lt;p align=&quot;justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;1. Menos Probabilidad de Propagaci&oacute;n de G&eacute;rmenes.&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; Los humidificadores pueden ayudarte a mantener la salud al agregar humedad al aire. En particular, se ha informado que los humidificadores ayudan a proteger contra la gripe en estudios.&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;2. Protege los Muebles&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; Los muebles y pisos de madera pueden agrietarse y romperse si no hay suficiente humedad en el aire. El uso de un humidificador ayuda a preservar la estructura de la madera.&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;3. Cuidado de la Piel&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; Agregar humedad al aire interior con un humidificador puede ayudar a prevenir la aparici&oacute;n de piel seca y agrietada.&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;4. Mantendr&aacute; Seguras las Plantas de Interior&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;El aire seco y fr&iacute;o tambi&eacute;n afecta a las plantas. Sus hojas comienzan a caer y la tierra parece m&aacute;s seca de lo habitual. Un humidificador puede beneficiar tanto a ti como a tus plantas de interior.&lt;br&gt;&lt;/p&gt;&lt;h6 align=&quot;justify&quot;&gt;5. Ayuda a Dormir Mejor&lt;/h6&gt;&lt;p align=&quot;justify&quot;&gt;Mantener el nivel de humedad en un nivel c&oacute;modo mientras intentas dormir te ayuda a relajarte.&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;/p&gt;', 'Aprende sobre los tipos de humidificadores, c&oacute;mo funcionan y los beneficios de tener uno en tu hogar. Mejora la humedad en interiores con Mazini Group', 'humidificadores', 'humidifiers.png', 'Humidificadores | Información y Tipos | Mazini Group', 'Descubre cómo los humidificadores aumentan la humedad en espacios interiores. Conoce los distintos tipos: humidificadores centrales, con impulsores, evaporadores, ultrasónicos y vaporizadores de vapor. Beneficios de tener un humidificador en casa', 'Humidificadores, Tipos de Humidificadores, Humedad en el Hogar, Beneficios de Humidificador, Mazini Group', 'es', 0, 1, '2023-08-17 10:09:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;
