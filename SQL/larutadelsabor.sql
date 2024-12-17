-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 10:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larutadelsabor`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen_url` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `imagen_url`) VALUES
(7, 'Pollo con Vegetales', 'Pollo al horno acompañado de vegetales al vapor.', 3400.00, 'https://storage.googleapis.com/fitia-api-bucket/media/images/recipe_images/1007979.jpg'),
(8, 'Ensalada de Kale con Naranja', 'Kale fresco, trozos de naranja, almendras tostadas y aderezo de vinagreta ligera.', 2500.00, 'https://media.istockphoto.com/id/636369880/es/foto/ensalada-de-invierno-cruda-de-col-rizada-saludable.webp?a=1&b=1&s=612x612&w=0&k=20&c=WKxScQWAkKtxN4j84PvFD_BcJdJxKQ1-N0wVsGffiMw='),
(9, 'Pechuga de Pavo al Horno con Hierbas', 'Pechuga de pavo marinado con hierbas frescas y especias, horneada hasta quedar jugosa.', 3600.00, 'https://www.streetfoodnews.it/wp-content/uploads/2023/06/petto-pollo-arancia.jpg'),
(10, 'Rollitos de Pepino con Atún', 'Tiras de pepino rellenas de atún bajo en grasa, cebolla y aguacate.', 2000.00, 'https://i.ytimg.com/vi/io4djoCKBvI/maxresdefault.jpg'),
(11, 'Sopa de Verduras y Garbanzos', 'Guiso de garbanzos y verduras frescas con un toque de cúrcuma.', 2800.00, 'https://images.pexels.com/photos/10338448/pexels-photo-10338448.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(12, 'Filete de Merluza a la Plancha', 'Filete de merluza asado con limón, ajo y perejil fresco.', 3000.00, 'https://www.lasrecetasfacilesdemaria.com/wp-content/uploads/2020/12/merluza-a-la-bilbaina-a-la-plancha.jpg'),
(13, 'Espaguetis de Calabacín con Pesto de Almendras', 'Espaguetis de calabacín con pesto casero de almendras y albahaca.', 3100.00, 'https://www.diet-health.info/images/recipes/main_view/zucchini-spaghetti-j-c-narayana-fotograf-joerg-wilhelm.jpg.webp'),
(14, 'Batido de Espinacas y Frutas', 'Bebida rica en nutrientes con espinacas, plátano, manzana y leche de almendra.', 2200.00, 'https://www.demoslavueltaaldia.com/sites/default/files/batido_verde_con_espinacas.jpg'),
(15, 'Albóndigas de Pollo con Salsa Baja en Azúcar', 'Albóndigas de pollo al horno acompañadas de una salsa ligera sin azúcar añadida.', 2600.00, 'https://imag.bonviveur.com/albondigas-con-salsa-espanola-al-horno.jpg'),
(16, 'Ensalada de Arroz Integral', 'Arroz integral con vegetales frescos y aderezo sin alérgenos.', 2600.00, 'https://www.brillante.es/wp-content/uploads/2018/06/ensalada-integral-destacada.jpg'),
(17, 'Fajitas de Pollo sin Gluten', 'Tiras de pollo sazonadas con pimientos y cebolla, servidas en tortillas sin gluten.', 2700.00, 'https://3.bp.blogspot.com/-k1-K2_oG6os/WIiI0ZMFySI/AAAAAAAAGXY/nZ5yZb3VvdQ8mEfqnOhifaxG9rJREie0gCLcB/s1600/Fajitas-de-Pollo-Restaurante-La-Mordida-Madrid.jpg'),
(18, 'Chips de Batata al Horno', 'Batata en rodajas horneadas con un toque de sal y especias.', 2300.00, 'https://pic.52112.com/180705/JPG-180705_439/HgMrFpFe8P_small.jpg'),
(19, 'Chips de Batata al Horno', 'Batata en rodajas horneadas con un toque de sal y especias.', 2300.00, 'https://assets.unileversolutions.com/recipes-v2/230845.jpg?imwidth=900'),
(20, 'Hamburguesa de Garbanzos sin Huevo', 'Hamburguesa de garbanzos con hierbas y especias, sin huevo ni alérgenos.', 2900.00, 'https://assets.unileversolutions.com/recipes-v2/230845.jpg?imwidth=900'),
(21, 'Ensalada de Col y Manzana', 'Mezcla crujiente de col morada, manzana y zanahoria, aliñada con limón.', 2600.00, 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2020/11/ensalada-de-col-y-manzana.jpg'),
(22, 'Tortilla de Papa sin Huevos', 'Tortilla esponjosa de papa elaborada sin huevo.', 2800.00, 'https://mui.today/__export/1597881791890/sites/mui/img/2020/08/19/tortilla_de_patatas_rellena_de_jamxn_y_queso_x6x_x1x_crop1597881724548.jpg_2035230307.jpg'),
(23, 'Pollo a la Naranja sin Soya', 'Pechuga de pollo glaseada con salsa de naranja natural.', 3200.00, 'https://imag.bonviveur.com/pollo-a-la-naranja.jpg'),
(24, 'Barras de Cereal sin Frutos Secos', 'Barras caseras de avena y frutas, sin frutos secos.', 2500.00, 'https://www.cucinare.tv/wp-content/uploads/2020/01/Barra-de-cereal.jpg'),
(25, 'Pasta con Vegetales', 'Pasta integral con una variedad de vegetales frescos.', 3200.00, 'https://www.demoslavueltaaldia.com/sites/default/files/pasta-verduras-asadas.jpg'),
(26, 'Curry de Lentejas con Coco', 'Lentejas cocidas en una cremosa salsa de coco y especias indias.', 3300.00, 'https://www.elmundoeats.com/wp-content/uploads/2021/02/Quick-Lentil-Coconut-Curry-view-from-top.jpg'),
(27, 'Tacos de Setas al Pastor', 'Setas marinadas con especias y servidas en tortillas de maíz.', 2600.00, 'https://assets.unileversolutions.com/recipes-v2/236509.jpg'),
(28, 'Falafel Casero con Tahini', 'Croquetas de garbanzos servidas con salsa de tahini.', 2900.00, 'https://okdiario.com/img/2018/08/20/falafels-con-salsa-de-tahini-1-620x349.jpg'),
(29, 'Pizza Vegetariana con Base de Coliflor', 'Pizza sin gluten con una base de coliflor y vegetales frescos.', 3500.00, 'https://www.tictacyummy.com/wp-content/uploads/2019/10/PortadaWeb-5.jpg'),
(30, 'Pastel de Calabaza y Espinacas', 'Capas de calabaza y espinacas al horno con especias.', 2700.00, 'https://media.airedesantafe.com.ar/p/88728bd3cd7fb5aaa27ce3aa79df5c51/adjuntos/268/imagenes/003/790/0003790489/1200x0/smart/tarta-calabaza-y-espinaca-la-receta-rica-saludable-y-economica-sorprender-la-familia.png\"'),
(31, 'Hamburguesa de Remolacha y Avena', 'Hamburguesa casera de remolacha, avena y especias.', 3100.00, 'https://i.pinimg.com/originals/69/a4/e2/69a4e29a205d1f02537e986003df742b.jpg'),
(32, 'Risotto de Espárragos y Champiñones', 'Risotto cremoso con espárragos y champiñones frescos.', 3200.00, 'https://mercadobarcelo.es/wp-content/uploads/2023/07/risotto-vegetariano-champinones-frescos-queso-parmesano-generado-ia-scaled-770x510.jpg'),
(33, 'Pollo Sin Lactosa', 'Pollo preparado sin productos lácteos.', 3800.00, 'https://menudiario.com/files/2012/04/pollo-leche-sin-lactosa-e1334746113459.jpg'),
(34, 'Pasta con Salsa de Tomate y Albahaca', 'Pasta al dente con salsa casera de tomate y albahaca fresca.', 2400.00, 'https://lapalmerarosa.com/wp-content/uploads/2014/03/pasta-fresca-de-albahaca.jpg'),
(35, 'Sopa de Tomate y Albahaca', 'Sopa cremosa de tomate sin lácteos, con un toque de albahaca.', 2200.00, 'https://nutricionsaludable.org/wp-content/uploads/2021/08/La-mejor-sopa-de-tomate-y-albahaca-asada.jpg'),
(36, 'Galletas de Avena sin Lactosa', 'Galletas horneadas con avena, coco y chispas de chocolate sin lactosa.', 1800.00, 'https://www.delacasa.uy/wp-content/uploads/2017/12/MG_9378.jpg'),
(37, 'Ensalada de Garbanzos con Pepino', 'Garbanzos, pepino y cebolla roja con vinagreta', 2000.00, 'https://d36fw6y2wq3bat.cloudfront.net/recipes/ensalada-de-garbanzos-y-pepino/900/ensalada-de-garbanzos-y-pepino_version_1670408922.jpg'),
(38, 'Pizza Vegana con Queso sin Lactosa', 'Pizza con queso vegano y vegetales frescos.', 3000.00, 'https://img.freepik.com/fotos-premium/pizza-vegana-lacteos-aderezos-queso-vegetales_198067-300.jpg'),
(39, 'Quiche de Verduras sin Lácteos', 'Quiche relleno de vegetales, sin lácteos.', 3200.00, 'https://mejorconsalud.as.com/wp-content/uploads/2018/10/quiche-de-verduras-y-queso-tierno-768x499.jpg'),
(40, 'Smoothie de Mango y Leche de Coco', 'Smoothie refrescante con mango y leche de coco.', 2100.00, 'https://cdn7.kiwilimon.com/recetaimagen/40352/960x640/53580.jpg.jpg'),
(41, 'Panqueques de Plátano sin Lactosa', 'Panqueques esponjosos de plátano con jarabe de arce.', 1900.00, 'https://cocinarrecetasdepostres.net/wp-content/uploads/2020/03/1583856183_919_Panqueques-de-platano-super-faciles-panqueques-sin-lacteos-hechos-en.jpg'),
(42, 'Hamburguesa de Res', 'Hamburguesa con jugosa torta de res y papas.', 2000.00, 'https://www.cocinavital.mx/wp-content/uploads/2017/08/hamburguesa-res.jpeg'),
(43, 'Lomito', 'Corte de res acompñado de papas salteadas y ensalada.', 2500.00, 'https://www.goya.com/media/3936/savory-beef-tenderloin.jpg'),
(44, 'Pierna de pollo asado', 'Pierna de pollo asado con papas a la francesa y ensalada.', 3200.00, 'https://images8.alphacoders.com/103/1032061.jpg'),
(45, 'Ceviche de Pescado', 'Pescado marinado en jugo de limón con cebolla, cilantro y chiles.', 2800.00, 'https://blog.redbus.pe/wp-content/uploads/2019/10/Ceviche-de-Pescado.jpg'),
(46, 'Tamales Caseros', 'Tamales rellenos de cerdo, envueltos en hojas de plátano.', 3000.00, 'https://mejorconsalud.as.com/wp-content/uploads/2018/03/Receta-de-tamales-caseros.jpg'),
(47, 'Chifrijo Tradicional', 'Frijoles con arroz, chicharrón y pico de gallo.', 3100.00, 'https://as2.ftcdn.net/v2/jpg/04/23/23/57/1000_F_423235730_Qcs7l8M4YW6Qy89z6s3C0vdnVgNz6X0N.jpg'),
(48, 'Picadillo de Papa con Carne', 'Picadillo de papas, carne molida y especias.', 2800.00, 'https://theblog.lascatalinascr.com/hs-fs/hubfs/Copy%20of%20The%20Daily-%20Friday,%20December%2027th,%202019--1.png?width=642&name=Copy%20of%20The%20Daily-%20Friday,%20December%2027th,%202019--1.png'),
(49, 'Asado de Cerdo con Salsa Criolla', 'Cerdo asado con salsa criolla y guarnición de yuca.', 3700.00, 'https://i.ytimg.com/vi/zMm5wBxnYjI/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','usuario') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `rol`) VALUES
(1, 'admin', '$2y$10$dZMmT/l2M1nnrHtg3SBxq.AOzA5mCLLJ1jiV92EPm2MQ2BRpSbmem', 'admin'),
(2, 'usuario', '$2y$10$GEig9tjptG7cltYqhNLNU.JuKS2e3sOdQ3W174zoiET3CHXcvTaxC', 'usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
