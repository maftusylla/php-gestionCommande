<?php
// index.php - point d'entrée : ne fait qu'assembler et lancer

require_once __DIR__ . '/model/product.model.php';
require_once __DIR__ . '/model/client.model.php';
require_once __DIR__ . '/model/commande.model.php';

require_once __DIR__ . '/controller/product.controller.php';
require_once __DIR__ . '/controller/client.controller.php';

saveProduct();
archiverProduit();
listerProduits();       
listerProduits(true);   
saveClient();
showClient();
listerClientsSansCommande();
