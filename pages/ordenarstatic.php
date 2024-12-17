<?php
session_start();

if ($_SESSION['rol'] !== 'usuario') {
    header("Location: login.php"); // Redirigir a login si no está autenticado
    exit();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>

<body class="d-flex flex-column h-100 --bs-emphasis-color">

    <?php include '../includes/header.php'; ?>

 
    <!-- Botones de Categorías -->
    <div class="container text-center category-btns">
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('todas')">Todas</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('diabeticos')">Diabéticos</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('alergicos')">Alérgicos</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('vegetarianos')">Vegetarianos</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('intolerantes-lactosa')">Intolerantes a la Lactosa</button>
        <button class="btn btn-secondary btn-custom" onclick="filterCategory('tradicional')">Tradicional</button>
    </div>

    <!-- Sección de Comidas Responsiva -->
    <section class="container mt-4"
        style="background-color: #f8f4e8; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); border-radius: 0.375rem; padding: 20px;">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <!-- Comidas para Diabéticos -->
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://storage.googleapis.com/fitia-api-bucket/media/images/recipe_images/1007979.jpg" class="card-img-top" alt="Pollo con Vegetales">
                    <div class="card-body">
                        <h5 class="card-title">Pollo con Vegetales</h5>
                        <p class="card-text">Pollo al horno acompañado de vegetales al vapor.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,400.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://media.istockphoto.com/id/636369880/es/foto/ensalada-de-invierno-cruda-de-col-rizada-saludable.webp?a=1&b=1&s=612x612&w=0&k=20&c=WKxScQWAkKtxN4j84PvFD_BcJdJxKQ1-N0wVsGffiMw=" class="card-img-top" alt="Ensalada de Kale con Naranja">
                    <div class="card-body">
                        <h5 class="card-title">Ensalada de Kale con Naranja</h5>
                        <p class="card-text">Kale fresco, trozos de naranja, almendras tostadas y aderezo de vinagreta ligera.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,500.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.streetfoodnews.it/wp-content/uploads/2023/06/petto-pollo-arancia.jpg" class="card-img-top" alt="Pechuga de Pavo al Horno con Hierbas">
                    <div class="card-body">
                        <h5 class="card-title">Pechuga de Pavo al Horno con Hierbas</h5>
                        <p class="card-text">Pechuga de pavo marinado con hierbas frescas y especias, horneada hasta quedar jugosa.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,600.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://i.ytimg.com/vi/io4djoCKBvI/maxresdefault.jpg" class="card-img-top" alt="Rollitos de Pepino con Atún">
                    <div class="card-body">
                        <h5 class="card-title">Rollitos de Pepino con Atún</h5>
                        <p class="card-text">Tiras de pepino rellenas de atún bajo en grasa, cebolla y aguacate.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,000.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://images.pexels.com/photos/10338448/pexels-photo-10338448.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Sopa de Verduras y Garbanzos">
                    <div class="card-body">
                        <h5 class="card-title">Sopa de Verduras y Garbanzos</h5>
                        <p class="card-text">Guiso de garbanzos y verduras frescas con un toque de cúrcuma.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.lasrecetasfacilesdemaria.com/wp-content/uploads/2020/12/merluza-a-la-bilbaina-a-la-plancha.jpg" class="card-img-top" alt="Filete de Merluza a la Plancha">
                    <div class="card-body">
                        <h5 class="card-title">Filete de Merluza a la Plancha</h5>
                        <p class="card-text">Filete de merluza asado con limón, ajo y perejil fresco.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,000.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.diet-health.info/images/recipes/main_view/zucchini-spaghetti-j-c-narayana-fotograf-joerg-wilhelm.jpg.webp" class="card-img-top" alt="Espaguetis de Calabacín con Pesto de Almendras">
                    <div class="card-body">
                        <h5 class="card-title">Espaguetis de Calabacín con Pesto de Almendras</h5>
                        <p class="card-text">Espaguetis de calabacín con pesto casero de almendras y albahaca.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,100.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.demoslavueltaaldia.com/sites/default/files/batido_verde_con_espinacas.jpg" class="card-img-top" alt="Batido de Espinacas y Frutas">
                    <div class="card-body">
                        <h5 class="card-title">Batido de Espinacas y Frutas</h5>
                        <p class="card-text">Bebida rica en nutrientes con espinacas, plátano, manzana y leche de almendra.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.deliciosi.com/images/1700/1769/alb%C3%B3ndigas-de-pollo-en-salsa.jpg" class="card-img-top" alt="Albóndigas de Pollo con Salsa Baja en Azúcar">
                    <div class="card-body">
                        <h5 class="card-title">Albóndigas de Pollo con Salsa Baja en Azúcar</h5>
                        <p class="card-text">Albóndigas de pollo al horno acompañadas de una salsa ligera sin azúcar añadida.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.demoslavueltaaldia.com/sites/default/files/pure-de-verduras.jpg" class="card-img-top" alt="Puré de Verduras con Hierbas">
                    <div class="card-body">
                        <h5 class="card-title">Puré de Verduras con Hierbas</h5>
                        <p class="card-text">Puré de zanahoria, brócoli y coliflor con un toque de hierbas frescas.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,100.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item diabeticos">
                <div class="card h-100 custom-card">
                    <img src="https://www.deliciouslyella.com/wp-content/uploads/2018/10/vegan-roast-chickpea-gnocchi-ellabakes1.jpg" class="card-img-top" alt="Ñoquis de Garbanzo con Verduras Asadas">
                    <div class="card-body">
                        <h5 class="card-title">Ñoquis de Garbanzo con Verduras Asadas</h5>
                        <p class="card-text">Ñoquis de garbanzo en salsa de tomate con verduras asadas.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,400.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comidas para Alérgicos -->
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://www.brillante.es/wp-content/uploads/2018/06/ensalada-integral-destacada.jpg" class="card-img-top" alt="Ensalada de Arroz Integral">
                    <div class="card-body">
                        <h5 class="card-title">Ensalada de Arroz Integral</h5>
                        <p class="card-text">Arroz integral con vegetales frescos y aderezo sin alérgenos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,600.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://3.bp.blogspot.com/-k1-K2_oG6os/WIiI0ZMFySI/AAAAAAAAGXY/nZ5yZb3VvdQ8mEfqnOhifaxG9rJREie0gCLcB/s1600/Fajitas-de-Pollo-Restaurante-La-Mordida-Madrid.jpg" class="card-img-top" alt="Fajitas de Pollo sin Gluten">
                    <div class="card-body">
                        <h5 class="card-title">Fajitas de Pollo sin Gluten</h5>
                        <p class="card-text">Tiras de pollo sazonadas con pimientos y cebolla, servidas en tortillas sin gluten.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,700.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://pic.52112.com/180705/JPG-180705_439/HgMrFpFe8P_small.jpg" class="card-img-top" alt="Chips de Batata al Horno">
                    <div class="card-body">
                        <h5 class="card-title">Chips de Batata al Horno</h5>
                        <p class="card-text">Batata en rodajas horneadas con un toque de sal y especias.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,300.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://assets.unileversolutions.com/recipes-v2/230845.jpg?imwidth=900" class="card-img-top" alt="Hamburguesa de Garbanzos sin Huevo">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguesa de Garbanzos sin Huevo</h5>
                        <p class="card-text">Hamburguesa de garbanzos con hierbas y especias, sin huevo ni alérgenos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,900.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2020/11/ensalada-de-col-y-manzana.jpg" class="card-img-top" alt="Ensalada de Col y Manzana">
                    <div class="card-body">
                        <h5 class="card-title">Ensalada de Col y Manzana</h5>
                        <p class="card-text">Mezcla crujiente de col morada, manzana y zanahoria, aliñada con limón.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,600.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://mui.today/__export/1597881791890/sites/mui/img/2020/08/19/tortilla_de_patatas_rellena_de_jamxn_y_queso_x6x_x1x_crop1597881724548.jpg_2035230307.jpg" class="card-img-top" alt="Tortilla de Patatas sin Huevos">
                    <div class="card-body">
                        <h5 class="card-title">Tortilla de Patatas sin Huevos</h5>
                        <p class="card-text">Tortilla esponjosa de patatas elaborada sin huevo.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://imag.bonviveur.com/pollo-a-la-naranja.jpg" class="card-img-top" alt="Pollo a la Naranja sin Soya">
                    <div class="card-body">
                        <h5 class="card-title">Pollo a la Naranja sin Soya</h5>
                        <p class="card-text">Pechuga de pollo glaseada con salsa de naranja natural.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item alergicos">
                <div class="card h-100 custom-card">
                    <img src="https://www.cucinare.tv/wp-content/uploads/2020/01/Barra-de-cereal.jpg" class="card-img-top" alt="Barras de Cereal sin Frutos Secos">
                    <div class="card-body">
                        <h5 class="card-title">Barras de Cereal sin Frutos Secos</h5>
                        <p class="card-text">Barras caseras de avena y frutas, sin frutos secos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,500.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comidas para Vegetarianos -->
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://www.demoslavueltaaldia.com/sites/default/files/pasta-verduras-asadas.jpg" class="card-img-top" alt="Pasta con Vegetales">
                    <div class="card-body">
                        <h5 class="card-title">Pasta con Vegetales</h5>
                        <p class="card-text">Pasta integral con una variedad de vegetales frescos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://www.elmundoeats.com/wp-content/uploads/2021/02/Quick-Lentil-Coconut-Curry-view-from-top.jpg" class="card-img-top" alt="Curry de Lentejas con Coco">
                    <div class="card-body">
                        <h5 class="card-title">Curry de Lentejas con Coco</h5>
                        <p class="card-text">Lentejas cocidas en una cremosa salsa de coco y especias indias.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,300.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://assets.unileversolutions.com/recipes-v2/236509.jpg" class="card-img-top" alt="Tacos de Setas al Pastor">
                    <div class="card-body">
                        <h5 class="card-title">Tacos de Setas al Pastor</h5>
                        <p class="card-text">Setas marinadas con especias y servidas en tortillas de maíz.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,600.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://th.bing.com/th/id/OIP.R5W5mA84fdEcOs7xnpKE5QHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="Falafel Casero con Tahini">
                    <div class="card-body">
                        <h5 class="card-title">Falafel Casero con Tahini</h5>
                        <p class="card-text">Croquetas de garbanzos servidas con salsa de tahini.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,900.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://i.ytimg.com/vi/_n-UC3awiRQ/maxresdefault.jpg" class="card-img-top" alt="Pizza Vegetariana con Base de Coliflor">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Vegetariana con Base de Coliflor</h5>
                        <p class="card-text">Pizza sin gluten con una base de coliflor y vegetales frescos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,500.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://media.airedesantafe.com.ar/p/88728bd3cd7fb5aaa27ce3aa79df5c51/adjuntos/268/imagenes/003/790/0003790489/1200x0/smart/tarta-calabaza-y-espinaca-la-receta-rica-saludable-y-economica-sorprender-la-familia.png" class="card-img-top" alt="Pastel de Calabaza y Espinacas">
                    <div class="card-body">
                        <h5 class="card-title">Pastel de Calabaza y Espinacas</h5>
                        <p class="card-text">Capas de calabaza y espinacas al horno con especias.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,700.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://i.pinimg.com/originals/69/a4/e2/69a4e29a205d1f02537e986003df742b.jpg" class="card-img-top" alt="Hamburguesa de Remolacha y Avena">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguesa de Remolacha y Avena</h5>
                        <p class="card-text">Hamburguesa casera de remolacha, avena y especias.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,100.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item vegetarianos">
                <div class="card h-100 custom-card">
                    <img src="https://th.bing.com/th/id/R.d9b458606258fd4faef10bc706053f96?rik=ZAsMNZZ%2bMP1Sjg&pid=ImgRaw&r=0" class="card-img-top" alt="Risotto de Espárragos y Champiñones">
                    <div class="card-body">
                        <h5 class="card-title">Risotto de Espárragos y Champiñones</h5>
                        <p class="card-text">Risotto cremoso con espárragos y champiñones frescos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comidas para Intolerantes a la Lactosa -->
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://menudiario.com/files/2012/04/pollo-leche-sin-lactosa-e1334746113459.jpg" class="card-img-top" alt="Pollo Sin Lactosa">
                    <div class="card-body">
                        <h5 class="card-title">Pollo Sin Lactosa</h5>
                        <p class="card-text">Pollo preparado sin productos lácteos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://lapalmerarosa.com/wp-content/uploads/2014/03/pasta-fresca-de-albahaca.jpg" class="card-img-top" alt="Pasta con Salsa de Tomate y Albahaca">
                    <div class="card-body">
                        <h5 class="card-title">Pasta con Salsa de Tomate y Albahaca</h5>
                        <p class="card-text">Pasta al dente con salsa casera de tomate y albahaca fresca.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,400.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://nutricionsaludable.org/wp-content/uploads/2021/08/La-mejor-sopa-de-tomate-y-albahaca-asada.jpg" class="card-img-top" alt="Sopa de Tomate y Albahaca">
                    <div class="card-body">
                        <h5 class="card-title">Sopa de Tomate y Albahaca</h5>
                        <p class="card-text">Sopa cremosa de tomate sin lácteos, con un toque de albahaca.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://www.delacasa.uy/wp-content/uploads/2017/12/MG_9378.jpg" class="card-img-top" alt="Galletas de Avena sin Lactosa">
                    <div class="card-body">
                        <h5 class="card-title">Galletas de Avena sin Lactosa</h5>
                        <p class="card-text">Galletas horneadas con avena, coco y chispas de chocolate sin lactosa.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡1,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://d36fw6y2wq3bat.cloudfront.net/recipes/ensalada-de-garbanzos-y-pepino/900/ensalada-de-garbanzos-y-pepino_version_1670408922.jpg" class="card-img-top" alt="Ensalada de Garbanzos con Pepino">
                    <div class="card-body">
                        <h5 class="card-title">Ensalada de Garbanzos con Pepino</h5>
                        <p class="card-text">Garbanzos, pepino y cebolla roja con vinagreta.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,000.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://img.freepik.com/fotos-premium/pizza-vegana-lacteos-aderezos-queso-vegetales_198067-300.jpg" class="card-img-top" alt="Pizza Vegana con Queso sin Lactosa">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Vegana con Queso sin Lactosa</h5>
                        <p class="card-text">Pizza con queso vegano y vegetales frescos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,000.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://th.bing.com/th/id/R.bcd3c0ea03f249746d4aa37d738b94c0?rik=HP%2fgXsIbnF2PYQ&riu=http%3a%2f%2f3.bp.blogspot.com%2f-gikVLzEPwow%2fUDC7WNrUqII%2fAAAAAAAAFao%2fdCPylUz0Pwc%2fs1600%2fquiche-verduras-receta-sin-gluten-paso-paso-CocinaConPoco.com-106.jpg&ehk=ummMPiWweIYEuTjDZxDcupg%2fp2zRY4qk0vnSnOfchK8%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Quiche de Verduras sin Lácteos">
                    <div class="card-body">
                        <h5 class="card-title">Quiche de Verduras sin Lácteos</h5>
                        <p class="card-text">Quiche relleno de vegetales, sin lácteos.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://cdn7.kiwilimon.com/recetaimagen/40352/960x640/53580.jpg.jpg" class="card-img-top" alt="Smoothie de Mango y Leche de Coco">
                    <div class="card-body">
                        <h5 class="card-title">Smoothie de Mango y Leche de Coco</h5>
                        <p class="card-text">Smoothie refrescante con mango y leche de coco.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,100.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item intolerantes-lactosa">
                <div class="card h-100 custom-card">
                    <img src="https://cocinarrecetasdepostres.net/wp-content/uploads/2020/03/1583856183_919_Panqueques-de-platano-super-faciles-panqueques-sin-lacteos-hechos-en.jpg" class="card-img-top" alt="Panqueques de Plátano sin Lactosa">
                    <div class="card-body">
                        <h5 class="card-title">Panqueques de Plátano sin Lactosa</h5>
                        <p class="card-text">Panqueques esponjosos de plátano con jarabe de arce.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡1,900.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comidas Tradicionales -->
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://th.bing.com/th/id/OIP.gdn8D0XxBBFdsFHOQkDVUwHaEK?rs=1&pid=ImgDetMain" class="card-img-top" alt="Hamburguesa de Res">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguesa de Res</h5>
                        <p class="card-text">Hamburguesa con jugosa torta de res y papas fritas.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,000.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://th.bing.com/th/id/OIP.6TvVRouyDxliUU-rS4Us3QHaFE?rs=1&pid=ImgDetMain" class="card-img-top" alt="Lomito">
                    <div class="card-body">
                        <h5 class="card-title">Lomito</h5>
                        <p class="card-text">Corte de res acompañado de papas salteadas y ensalada.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,500.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://images8.alphacoders.com/103/1032061.jpg" class="card-img-top" alt="Pierna de pollo asado">
                    <div class="card-body">
                        <h5 class="card-title">Pierna de Pollo Asado</h5>
                        <p class="card-text">Pierna de pollo asado con papas a la francesa y ensalada.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,200.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://blog.redbus.pe/wp-content/uploads/2019/10/Ceviche-de-Pescado.jpg" class="card-img-top" alt="Ceviche de Pescado">
                    <div class="card-body">
                        <h5 class="card-title">Ceviche de Pescado</h5>
                        <p class="card-text">Pescado marinado en jugo de limón con cebolla, cilantro y chiles.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://mejorconsalud.as.com/wp-content/uploads/2018/03/Receta-de-tamales-caseros.jpg" class="card-img-top" alt="Tamales Caseros">
                    <div class="card-body">
                        <h5 class="card-title">Tamales Caseros</h5>
                        <p class="card-text">Tamales rellenos de cerdo, envueltos en hojas de plátano.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,000.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://as2.ftcdn.net/v2/jpg/04/23/23/57/1000_F_423235730_Qcs7l8M4YW6Qy89z6s3C0vdnVgNz6X0N.jpg" class="card-img-top" alt="Chifrijo Tradicional">
                    <div class="card-body">
                        <h5 class="card-title">Chifrijo Tradicional</h5>
                        <p class="card-text">Frijoles con arroz, chicharrón y pico de gallo.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,100.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://theblog.lascatalinascr.com/hs-fs/hubfs/Copy%20of%20The%20Daily-%20Friday,%20December%2027th,%202019--1.png?width=642&name=Copy%20of%20The%20Daily-%20Friday,%20December%2027th,%202019--1.png" class="card-img-top" alt="Picadillo de Papa con Carne">
                    <div class="card-body">
                        <h5 class="card-title">Picadillo de Papa con Carne</h5>
                        <p class="card-text">Picadillo de papas, carne molida y especias.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡2,800.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4 menu-item tradicional">
                <div class="card h-100 custom-card">
                    <img src="https://i.ytimg.com/vi/zMm5wBxnYjI/maxresdefault.jpg" class="card-img-top" alt="Asado de Cerdo con Salsa Criolla">
                    <div class="card-body">
                        <h5 class="card-title">Asado de Cerdo con Salsa Criolla</h5>
                        <p class="card-text">Cerdo asado con salsa criolla y guarnición de yuca.</p>
                        <div class="price-badge">
                            <span class="badge bg-primary">₡3,700.00</span>
                            <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Fin de la fila de platillos -->
    </section>

         <!-- 10 footer -->
         <footer class="footer">
            <h2>Contáctanos</h2>
            <h4>+506 8745 2819</h4>
            <div style="margin: 10px 0;">
              <i class="fa-brands fa-facebook fa-xl icon-facebook"></i>
              <i class="fa-brands fa-instagram fa-xl icon-instagram"></i>
              <i class="fa-brands fa-x-twitter fa-xl icon-twitter"></i>
              <i class="fa-brands fa-whatsapp fa-xl icon-whatsapp"></i>
              
            </div>
            <p class= "derechos">© Derechos reservados</p>
          </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterCategory(category) {
            const items = document.querySelectorAll('.menu-item');
            items.forEach(item => {
                if (category === 'todas' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
