<?php

require_once __DIR__ . '/models/product.model.php';
require_once __DIR__ . '/models/client.model.php';
require_once __DIR__ . '/models/commande.model.php';

require_once __DIR__ . '/controllers/product.controller.php';
require_once __DIR__ . '/controllers/client.controller.php';

saveProduct();
archiverProduit();
listerProduits();       
listerProduits(true);   
saveClient();
showClient();
listerClientsSansCommande();
